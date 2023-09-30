<?php

function print_image(string $url, string $alt = '', int $height = 0, int $width = 0): string {
    $string = '<img src="' . $url . '"';
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

echo print_image('gibbon.png'), "\n";
echo print_image('gibbon.png', 'Hi, my friend'), "\n";
echo print_image('gibbon.png', 'Hi, my friend', 150), "\n";
echo print_image('gibbon.png', 'Hi, my friend', 200, 150), "\n";
