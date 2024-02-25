<?php

if (isset($_COOKIE['date'])) {
    $dateTime = new DateTime();
    $dateTime->setTimestamp((int)$_COOKIE['date']);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Говносайт №1</title>
    </head>
    <body>
        <?php if (isset($dateTime)):?>
            <p>You viewed this page on <?=$dateTime->format('d.m.Y H:i:s')?>.</p>
        <?php else:?>
            <p>You have not viewed this page.</p>
        <?php endif;?>
    </body>
</html>
<?php
$dateTime = new DateTime();
setcookie('date', $dateTime->getTimestamp(), [
    'expires' => time() + 60 * 60 * 24, 
    'path' => '/',
    'domain' => '127.0.0.1',
    'secure' => false,
    'httponly' => true,
    'samesite' => 'Strict'
]);
