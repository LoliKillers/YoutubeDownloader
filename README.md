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

[loli.loveslife.biz](https://api.loli.loveslife.biz)
