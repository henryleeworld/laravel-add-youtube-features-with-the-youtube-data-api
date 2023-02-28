<?php

namespace App\Http\Controllers;

use Alaouy\Youtube\Facades\Youtube;

class YouTubeController extends Controller
{
    public function show() 
    {
        $videoList = Youtube::getVideoInfo(['ZEjP3MUHGg4','fARcYBFWljM','7-eAwGQ6xks','48T5Mru8-dk','txl5BXvJAeE']);
        foreach ($videoList as $video) {
            echo '影片編號：' . $video->id . PHP_EOL;
            echo '影片標題：' . $video->snippet->title . PHP_EOL;
            echo '影片發布日期：' . $video->snippet->publishedAt . PHP_EOL;
            echo '影片縮圖網址：' . $video->snippet->thumbnails->high->url . PHP_EOL;
            echo '影片觀看次數：' . $video->statistics->viewCount . PHP_EOL;
            echo '影片評論次數：' . $video->statistics->commentCount . PHP_EOL;
            echo '影片發布日期：' . $video->snippet->publishedAt . PHP_EOL;
            echo '頻道名稱：' . $video->snippet->channelTitle . PHP_EOL;
            echo PHP_EOL;
        }
    }
}
