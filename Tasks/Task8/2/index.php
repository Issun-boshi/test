<?php

$file_pointer = fopen(__DIR__ . '/addresses.txt','rb');

$addresses = [];
while (($buffer = fgets($file_pointer)) !== false) {
    $buffer = trim($buffer);

    if (!isset($addresses[$buffer])) {
        $addresses[$buffer] = 0;
    }

    $addresses[$buffer]++;
}

fclose($file_pointer);

arsort($addresses);

$string = '';
foreach ($addresses as $key => $value) {
    $string .= $key  . ', ' . $value . "\n";
}


file_put_contents(__DIR__ . '/addresses-count.txt', $string);
