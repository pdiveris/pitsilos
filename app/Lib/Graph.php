<?php

namespace App\Lib;

class Graph
{
    public static function getBulmaRatio(string $path): string
    {
        $path = storage_path('app/public/'.$path);
        $imgDetails = list($width, $height, $type, $attr) = getimagesize($path);

        $imageWidth = $imgDetails[0];
        $imageHeight = $imgDetails[1];

/*        $divisor = gmp_intval( gmp_gcd( $imageWidth, $imageHeight ) );
        $aspectRatio = $imageWidth / $divisor . ':' . $imageHeight / $divisor;*/

        if ($imageWidth === $imageHeight) {
            $aspectRatio = 'is-1by1';
        } elseif ($imageWidth > $imageHeight) {
            $aspectRatio = 'is-5by3';
        } elseif ($imageHeight > $imageWidth) {
            $aspectRatio = 'is-3by5';
        } else {
            $aspectRatio = ' xyz ';
        }
        $aspectRatio = '';
        return $aspectRatio;
    }
}
