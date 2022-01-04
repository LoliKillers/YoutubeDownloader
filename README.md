# YouTubeDownloader
Get video source with preview image from YouTube

Install via Composer
```
composer require lolikillers/youtube-downloader
```

You have two options of how to use this package

1. Use it standalone

```php
<?php
use LoliKillers\RublixDownloader\Model\URL;
use LoliKillers\YouTubeDownloader\YouTubeHandler;
use Symfony\Component\HttpClient\HttpClient;

include_once 'vendor/autoload.php';

$httpClient = HttpClient::create();

$youtubeHandler = new YouTubeHandler($httpClient);
$res = $youtubeHandler->fetchResource(URL::fromString('https://www.youtube.com/watch?v=zIwLWfaAg-8'));

print_r($res->toArray());
//
Array
(
    [source_url] => https://www.youtube.com/watch?v=zIwLWfaAg-8
    [preview_image] => Array
        (
            [type] => image
            [format] => jpg
            [quality] => 1920x1080
            [url] => https://i.ytimg.com/vi/zIwLWfaAg-8/maxresdefault.jpg
            [mime_type] => image/jpg
        )

    [preview_video] => Array
        (
            [type] => video
            [format] => mp4
            [quality] => 720p
            [url] => https://r4---sn-w5nuxa-c33l7.googlevideo.com/videoplayback?expire=1625797917&ei=vWDnYIvmGoKumgfina6IAw&ip=183.88.233.1&id=o-AEzKAX7pxlj2BXCylIGPRo8A9D7avCvawCBdlxK-ChNb&itag=22&source=youtube&requiressl=yes&mh=AY&mm=31%2C26&mn=sn-w5nuxa-c33l7%2Csn-npoeenle&ms=au%2Conr&mv=m&mvi=4&pcm2cms=yes&pl=25&initcwndbps=1315000&vprv=1&mime=video%2Fmp4&ns=AsbqEEjhEqqQs9Y1ZEQx2RwG&cnr=14&ratebypass=yes&dur=2450.239&lmt=1610314990726168&mt=1625775428&fvip=4&fexp=24001373%2C24007246&c=TVHTML5&txp=5535432&n=D9L14twIIkwuuw&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cvprv%2Cmime%2Cns%2Ccnr%2Cratebypass%2Cdur%2Clmt&sig=AOq0QJ8wRgIhALGt67PSOtmz9N50Avo-Rceg3CisEMfpx5FhBEsPmZQFAiEAy27LWAZdBeDGBsklDWoGpB1eKVZmWi-5v0IEmUwWRIY%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpcm2cms%2Cpl%2Cinitcwndbps&lsig=AG3C_xAwRAIgJ5i9Wmr73sEbDg6MjuGnBmV7oM3626KThaOFHNjXZcYCIHK2m304RqTcXflYkwF13__XiX4zEt4xA4aoZs018MhZ
            [mime_type] => video/mp4
        )

    [attributes] => Array
        (
            [title] => The future we're building -- and boring | Elon Musk
            [hashtags] => Array
                (
                    [0] => TEDTalk
                    [1] => TEDTalks
                    [2] => Elon Musk
                    [3] => Chris Anderson
                    [4] => Tesla
                    [5] => SpaceX
                    [6] => The Boring Company
                    [7] => Mars
                    [8] => business
                    [9] => design
                    [10] => energy
                    [11] => engineering
                    [12] => entrepreneur
                    [13] => environment
                    [14] => exploration
                    [15] => future
                    [16] => humanity
                    [17] => innovation
                    [18] => infrastructure
                    [19] => invention
                    [20] => leadership
                    [21] => science
                    [22] => solar power
                    [23] => technology
                    [24] => universe
                )

            [author] => Array
                (
                    [id] => UCAuUUnT6oDeKwE6v1NGQxug
                    [avatar_url] =>
                    [full_name] => TED
                    [nickname] => TED
                )

        )

    [items] => Array
        (
            [image] => Array
                (
                    [0] => Array
                        (
                            [type] => image
                            [format] => jpg
                            [quality] => 1920x1080
                            [url] => https://i.ytimg.com/vi/zIwLWfaAg-8/maxresdefault.jpg
                            [mime_type] => image/jpg
                        )

                )

            [text] => Array
                (
                    [0] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => el
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=el
                            [mime_type] => text/xml
                        )

                    [1] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => ko
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=ko
                            [mime_type] => text/xml
                        )

                    [2] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => hr
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=hr
                            [mime_type] => text/xml
                        )

                    [3] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => zh-TW
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=zh-TW
                            [mime_type] => text/xml
                        )

                    [4] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => zh-CN
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=zh-CN
                            [mime_type] => text/xml
                        )

                    [5] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => cs
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=cs
                            [mime_type] => text/xml
                        )

                    [6] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => sr
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=sr
                            [mime_type] => text/xml
                        )

                    [7] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => ja
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=ja
                            [mime_type] => text/xml
                        )

                    [8] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => nl
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=nl
                            [mime_type] => text/xml
                        )

                    [9] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => tr
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=tr
                            [mime_type] => text/xml
                        )

                    [10] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => th
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=th
                            [mime_type] => text/xml
                        )

                    [11] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => bg
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=bg
                            [mime_type] => text/xml
                        )

                    [12] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => fa
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=fa
                            [mime_type] => text/xml
                        )

                    [13] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => pt-BR
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=pt-BR
                            [mime_type] => text/xml
                        )

                    [14] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => pt-PT
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=pt-PT
                            [mime_type] => text/xml
                        )

                    [15] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => fr
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=fr
                            [mime_type] => text/xml
                        )

                    [16] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => uk
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=uk
                            [mime_type] => text/xml
                        )

                    [17] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => de
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=de
                            [mime_type] => text/xml
                        )

                    [18] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => ru
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=ru
                            [mime_type] => text/xml
                        )

                    [19] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => ro
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=ro
                            [mime_type] => text/xml
                        )

                    [20] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => lv
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=lv
                            [mime_type] => text/xml
                        )

                    [21] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => vi
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=vi
                            [mime_type] => text/xml
                        )

                    [22] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => es
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=es
                            [mime_type] => text/xml
                        )

                    [23] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => sv
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=sv
                            [mime_type] => text/xml
                        )

                    [24] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => en
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=en
                            [mime_type] => text/xml
                        )

                    [25] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => ar
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=ar
                            [mime_type] => text/xml
                        )

                    [26] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => it
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=it
                            [mime_type] => text/xml
                        )

                    [27] => Array
                        (
                            [type] => text
                            [format] => xml
                            [quality] => hu
                            [url] => https://www.youtube.com/api/timedtext?v=zIwLWfaAg-8&asr_langs=de,en,es,fr,it,ja,ko,nl,pt,ru&caps=asr&exp=xftt&xorp=true&xoaf=5&hl=th&ip=0.0.0.0&ipbits=0&expire=1625801517&sparams=ip,ipbits,expire,v,asr_langs,caps,exp,xorp,xoaf&signature=E56259A0D9124B2E08A1795BA3892066513040BC.8341DACDE8FCF65B1CF9DD43E3F769EE15F7FC51&key=yt8&lang=hu
                            [mime_type] => text/xml
                        )

                )

            [video] => Array
                (
                    [0] => Array
                        (
                            [type] => video
                            [format] => mp4
                            [quality] => 360p
                            [url] => https://r4---sn-w5nuxa-c33l7.googlevideo.com/videoplayback?expire=1625797917&ei=vWDnYIvmGoKumgfina6IAw&ip=183.88.233.1&id=o-AEzKAX7pxlj2BXCylIGPRo8A9D7avCvawCBdlxK-ChNb&itag=18&source=youtube&requiressl=yes&mh=AY&mm=31%2C26&mn=sn-w5nuxa-c33l7%2Csn-npoeenle&ms=au%2Conr&mv=m&mvi=4&pcm2cms=yes&pl=25&initcwndbps=1315000&vprv=1&mime=video%2Fmp4&ns=AsbqEEjhEqqQs9Y1ZEQx2RwG&gir=yes&clen=113105008&ratebypass=yes&dur=2450.239&lmt=1540445679793881&mt=1625775428&fvip=4&fexp=24001373%2C24007246&c=TVHTML5&txp=5531432&n=D9L14twIIkwuuw&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cvprv%2Cmime%2Cns%2Cgir%2Cclen%2Cratebypass%2Cdur%2Clmt&sig=AOq0QJ8wRAIgCftifueDzD_pehZ2xoEJbi4044_GaM-45Bz0INhAseECIDJzWztjCJrDG2KqZ2-SB7Uv_qXh-2P08KrnrMmbaamy&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpcm2cms%2Cpl%2Cinitcwndbps&lsig=AG3C_xAwRAIgJ5i9Wmr73sEbDg6MjuGnBmV7oM3626KThaOFHNjXZcYCIHK2m304RqTcXflYkwF13__XiX4zEt4xA4aoZs018MhZ
                            [mime_type] => video/mp4
                        )

                    [1] => Array
                        (
                            [type] => video
                            [format] => mp4
                            [quality] => 720p
                            [url] => https://r4---sn-w5nuxa-c33l7.googlevideo.com/videoplayback?expire=1625797917&ei=vWDnYIvmGoKumgfina6IAw&ip=183.88.233.1&id=o-AEzKAX7pxlj2BXCylIGPRo8A9D7avCvawCBdlxK-ChNb&itag=22&source=youtube&requiressl=yes&mh=AY&mm=31%2C26&mn=sn-w5nuxa-c33l7%2Csn-npoeenle&ms=au%2Conr&mv=m&mvi=4&pcm2cms=yes&pl=25&initcwndbps=1315000&vprv=1&mime=video%2Fmp4&ns=AsbqEEjhEqqQs9Y1ZEQx2RwG&cnr=14&ratebypass=yes&dur=2450.239&lmt=1610314990726168&mt=1625775428&fvip=4&fexp=24001373%2C24007246&c=TVHTML5&txp=5535432&n=D9L14twIIkwuuw&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cvprv%2Cmime%2Cns%2Ccnr%2Cratebypass%2Cdur%2Clmt&sig=AOq0QJ8wRgIhALGt67PSOtmz9N50Avo-Rceg3CisEMfpx5FhBEsPmZQFAiEAy27LWAZdBeDGBsklDWoGpB1eKVZmWi-5v0IEmUwWRIY%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpcm2cms%2Cpl%2Cinitcwndbps&lsig=AG3C_xAwRAIgJ5i9Wmr73sEbDg6MjuGnBmV7oM3626KThaOFHNjXZcYCIHK2m304RqTcXflYkwF13__XiX4zEt4xA4aoZs018MhZ
                            [mime_type] => video/mp4
                        )

                )

            [audio] => Array
                (
                    [0] => Array
                        (
                            [type] => audio
                            [format] => mp4
                            [quality] => 132379
                            [url] => https://r4---sn-w5nuxa-c33l7.googlevideo.com/videoplayback?expire=1625797917&ei=vWDnYIvmGoKumgfina6IAw&ip=183.88.233.1&id=o-AEzKAX7pxlj2BXCylIGPRo8A9D7avCvawCBdlxK-ChNb&itag=140&source=youtube&requiressl=yes&mh=AY&mm=31%2C26&mn=sn-w5nuxa-c33l7%2Csn-npoeenle&ms=au%2Conr&mv=m&mvi=4&pcm2cms=yes&pl=25&initcwndbps=1315000&vprv=1&mime=audio%2Fmp4&ns=8eFcODLa11SBpjeKAIMrIpoG&gir=yes&clen=39655192&dur=2450.239&lmt=1610312164043158&mt=1625775428&fvip=4&keepalive=yes&fexp=24001373%2C24007246&c=TVHTML5&txp=5531432&n=OcABgnLryVgYxj&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cvprv%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&sig=AOq0QJ8wRgIhAIB1CoCd9fpTYGM0vaAjLyaVUzSrIitFzNO7etF0udBIAiEAjGKjYbNJfy72OSCh-VKg5tE4ot9LDaIPQdUgl5F5Chs%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpcm2cms%2Cpl%2Cinitcwndbps&lsig=AG3C_xAwRAIgJ5i9Wmr73sEbDg6MjuGnBmV7oM3626KThaOFHNjXZcYCIHK2m304RqTcXflYkwF13__XiX4zEt4xA4aoZs018MhZ
                            [mime_type] => audio/mp4
                        )

                )

        )

)

**/
```

2. Use it with RublixDownloader. 
Useful in case if your application is willing to download files from different sources (i.e. has more than one download handler)

```php
<?php
use LoliKillers\RublixDownloader\RublixDownloader;
use LoliKillers\RublixDownloader\Model\URL;
use LoliKillers\YouTubeDownloader\YouTubeHandler;
use Symfony\Component\HttpClient\HttpClient;

include_once 'vendor/autoload.php';

$rublixDownloader = new RublixDownloader();
$rublixDownloader->addHandler(new YouTubeHandler(HttpClient::create()));

$YouTubePageUrl = URL::fromString('https://www.youtube.com/watch?v=zIwLWfaAg-8');

$video = $rublixDownloader->fetchResource($YouTubePageUrl);
print_r($video->toArray());
```

[iwannacode.net](https://iwannacode.net)
