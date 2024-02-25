<?php

$url = 'http://www.php.net/releases/?json';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$contents = curl_exec($ch);
curl_close($ch);

$data = json_decode($contents, true);

$firstKey = array_keys($data)[0];
$firstValue = $data[$firstKey];

echo $firstValue['version'] . "\n";
