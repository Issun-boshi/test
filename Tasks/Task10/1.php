<?php

$url = 'http://www.php.net/releases/?json';
$contents = file_get_contents($url);
$data = json_decode($contents, true);

$firstKey = array_keys($data)[0];
$firstValue = $data[$firstKey];

echo $firstValue['version'] . "\n";
