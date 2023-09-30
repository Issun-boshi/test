<?php

function colour(int $red, int $green, int $blue): string {
    return '#' . str_pad(dechex($red), 2, '0', STR_PAD_LEFT) . str_pad(dechex($green), 2, '0', STR_PAD_LEFT) . str_pad(dechex($blue), 2, '0', STR_PAD_LEFT);
}

echo colour(25, 10, 14);
