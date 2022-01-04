<?php
namespace LoliKillers\YouTubeDownloader\Tests;

use LoliKillers\RublixDownloader\Model\URL;
use LoliKillers\YouTubeDownloader\YouTubeHandler;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\HttpClient;

class YouTubeURLHandlerTest extends TestCase
{
    /** @test */
    public function handler_validates_given_url()
    {
        $handler = new YouTubeHandler(HttpClient::create());
        $url = URL::fromString('https://www.youtube.com/watch?v=43TmnIaL3n4');
        $this->assertTrue($handler->isValidUrl($url));

        $url = URL::fromString('https://www.youtube.com/watch?vi=43TmnIaL3n4');
        $this->assertTrue($handler->isValidUrl($url));

        $url = URL::fromString('https://www.youtube.com/?v=43TmnIaL3n4');
        $this->assertTrue($handler->isValidUrl($url));

        $url = URL::fromString('https://www.youtube.com/?vi=43TmnIaL3n4');
        $this->assertTrue($handler->isValidUrl($url));

        $url = URL::fromString('https://www.youtube.com/v/43TmnIaL3n4');
        $this->assertTrue($handler->isValidUrl($url));

        $url = URL::fromString('https://www.youtube.com/vi/43TmnIaL3n4');
        $this->assertTrue($handler->isValidUrl($url));
    }

    /** @test */
    public function handler_validates_given_url_without_www()
    {
        $handler = new YouTubeHandler(HttpClient::create());
        $url = URL::fromString('https://youtube.com/watch?v=43TmnIaL3n4');
        $this->assertTrue($handler->isValidUrl($url));
    }

    /** @test */
    public function handler_validates_given_short_url()
    {
        $handler = new YouTubeHandler(HttpClient::create());
        $url = URL::fromString('https://youtu.be/43TmnIaL3n4');
        $this->assertTrue($handler->isValidUrl($url));
    }

    /** @test */
    public function handler_validates_given_mobile_url()
    {
        $handler = new YouTubeHandler(HttpClient::create());
        $url = URL::fromString('https://m.youtube.com/watch?v=43TmnIaL3n4');
        $this->assertTrue($handler->isValidUrl($url));
    }

    /** @test */
    public function handler_validates_given_embed_url()
    {
        $handler = new YouTubeHandler(HttpClient::create());
        $url = URL::fromString('https://www.youtube.com/embed/43TmnIaL3n4');
        $this->assertTrue($handler->isValidUrl($url));
    }

    /** @test */
    public function handler_can_not_validate_given_url()
    {
        $handler = new YouTubeHandler(HttpClient::create());
        $url = URL::fromString('https://www.vimeo.com/watch?v=43TmnIaL3n4');
        $this->assertFalse($handler->isValidUrl($url));
    }
}