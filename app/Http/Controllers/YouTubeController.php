<?php

namespace App\Http\Controllers;

use Alaouy\Youtube\Facades\Youtube;

class YouTubeController extends Controller
{
    public function show() 
    {
        $videoList = Youtube::getVideoInfo(['ygFjpwCTuEU','PePiBanDerA','qnsnqipu1S8','sKg96yEvZ_4','yxUs8xtpWYI']);
        foreach ($videoList as $video) {
            echo __('Video ID:') . $video->id . PHP_EOL;
            echo __('Video title:') . $video->snippet->title . PHP_EOL;
            echo __('Video published at:') . $video->snippet->publishedAt . PHP_EOL;
            echo __('Video thumbnail URL:') . $video->snippet->thumbnails->high->url . PHP_EOL;
            echo __('Video views count:') . $video->statistics->viewCount . PHP_EOL;
            echo __('Video comments count:') . $video->statistics->commentCount . PHP_EOL;
            echo __('Channel name:') . $video->snippet->channelTitle . PHP_EOL;
            echo PHP_EOL;
        }
    }
}
