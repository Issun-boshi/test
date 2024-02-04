<?php

$viewCount = 1;
if (!empty($_COOKIE['count'])) {
    $viewCount += (int) $_COOKIE['count'];
}

if ($viewCount === 20) {
    setcookie('count', $viewCount, [
        'expires' => time() - 1,
        'path' => '/',
        'domain' => '127.0.0.1',
        'secure' => false,
        'httponly' => true,
        'samesite' => 'Strict'
    ]);
} else {
    setcookie('count', $viewCount, [
        'expires' => time() + 60 * 60 * 24, 
        'path' => '/',
        'domain' => '127.0.0.1',
        'secure' => false,
        'httponly' => true,
        'samesite' => 'Strict'
    ]);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Говносайт №1</title>
    </head>
    <body>
        <?php if ($viewCount === 5 || $viewCount === 10 || $viewCount === 15):?>
            <p>You've viewed this page <?=$viewCount?> times.</p>
        <?php endif; ?>
    </body>
</html>
