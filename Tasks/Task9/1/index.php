<?php

$viewCount = 1;
if (!empty($_COOKIE['count'])) {
    $viewCount += (int) $_COOKIE['count'];
}

setcookie('count', $viewCount, [
    'expires' => time() + 60 * 60 * 24, 
    'path' => '/',
    'domain' => '127.0.0.1',
    'secure' => false,
    'httponly' => true,
    'samesite' => 'Strict'
]);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Говносайт №1</title>
    </head>
    <body>
        <p>You've viewed this page <?=$viewCount?> times.</p>
    </body>
</html>
