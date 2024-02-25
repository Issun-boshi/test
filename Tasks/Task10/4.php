<?php

$url = 'https://api.github.com/gists';
$credentials = json_decode(file_get_contents(__DIR__ . '/credentials.json'));

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Issun-boshi');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: application/vnd.github+json',
    'Authorization: Bearer ' . $credentials->token,
    'X-GitHub-Api-Version: 2022-11-28'
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    'description' => 'Example of a gist',
    'public' => false,
    'files' => [
        'README.md' => [
            'content' => 'Hello World'
        ]
    ]
]));
$content = curl_exec($ch);
curl_close($ch);

var_dump($content);
