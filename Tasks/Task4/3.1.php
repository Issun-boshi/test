<?php

function print_image(string $url, string $alt = '', int $height = 0, int $width = 0): string {
    $path = '/images/';
    $string = '<img src="' . $path . $url . '"';
    if ($alt !== '') {
        $string .= ' alt="' . $alt . '"';
    }
    if ($height !== 0) {
        $string .= ' height="' . $height . '"';
    }
    if ($width !== 0) {
        $string .= ' width="' . $width . '"';
    }
    $string .= '/>';
    return $string;
}
