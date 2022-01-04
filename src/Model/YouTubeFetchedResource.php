<?php
namespace LoliKillers\YouTubeDownloader\Model;

use LoliKillers\RublixDownloader\Model\FetchedResource;

class YouTubeFetchedResource extends FetchedResource
{
    /**
     * @return string
     */
    public function getExtSource(): string
    {
        return 'youtube';
    }
}