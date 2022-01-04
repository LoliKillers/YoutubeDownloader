<?php
namespace LoliKillers\YouTubeDownloader;

class SignatureDecoder
{
    /**
     * @param $signature
     * @param $playerSource
     * @return string
     */
    public function decode($signature, $playerSource): string
    {
        $funcName = $this->parseFunctionName($playerSource);
        $instructions = $this->parseFunctionCode($funcName, $playerSource);

        foreach ($instructions as $opt) {
            $command = $opt[0];
            $value = $opt[1];
            if ($command == 'swap') {
                $temp = $signature[0];
                $signature[0] = $signature[$value % strlen($signature)];
                $signature[$value] = $temp;
            } elseif ($command == 'splice') {
                $signature = substr($signature, $value);
            } elseif ($command == 'reverse') {
                $signature = strrev($signature);
            }
        }

        return trim($signature);
    }

    /**
     * @param $playerSource
     * @return string
     */
    public function parseFunctionName($playerSource): string
    {
        if (preg_match('@,\s*encodeURIComponent\((\w{2})@is', $playerSource, $matches)) {
            return preg_quote($matches[1]);
        } else if (preg_match('@(?:\b|[^a-zA-Z0-9$])([a-zA-Z0-9$]{2,3})\s*=\s*function\(\s*a\s*\)\s*{\s*a\s*=\s*a\.split\(\s*""\s*\)@is', $playerSource, $matches)) {
            return preg_quote($matches[1]);
        }

        return '';
    }

    /**
     * @param $funcName
     * @param $playerSource
     * @return array
     */
    public function parseFunctionCode($funcName, $playerSource): array
    {
        if (preg_match('/' . $funcName . '=function\([a-z]+\){(.*?)}/', $playerSource, $matches)) {
            $jsCode = $matches[1];

            if (preg_match_all('/([a-z0-9$]{2})\.([a-z0-9]{2})\([^,]+,(\d+)\)/i', $jsCode, $matches) != false) {
                $funcList = $matches[2];
                preg_match_all(
                    '/(' . implode('|', $funcList) . '):function(.*?)\}/m',
                    $playerSource,
                    $matches2,
                    PREG_SET_ORDER
                );
                $functions = [];
                foreach ($matches2 as $m) {
                    if (strpos($m[2], 'splice') !== false) {
                        $functions[$m[1]] = 'splice';
                    } elseif (strpos($m[2], 'a.length') !== false) {
                        $functions[$m[1]] = 'swap';
                    } elseif (strpos($m[2], 'reverse') !== false) {
                        $functions[$m[1]] = 'reverse';
                    }
                }

                $instructions = array();
                foreach ($matches[2] as $index => $name) {
                    $instructions[] = [
                        $functions[$name], 
                        $matches[3][$index]
                    ];
                }

                return $instructions;
            }
        }

        return [];
    }
}