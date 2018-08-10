<?php

namespace Faker\Provider\ImageContracts;

class PicsumPhotos extends ImageContract {

    static function categories()
    {
        return array();
    }

    static function baseUrl()
    {
        return "http://picsum.photos/";
    }

    static function imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false)
    {
        $url = "{$width}/{$height}/";

        if ($gray) {
            $url = "g/" . $url;
        }

        if ($randomize) {
            $url .= '?random';
        }

        return static::baseUrl() . $url;
    }
}