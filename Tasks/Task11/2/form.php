<?php

$message = json_encode($_POST);
error_log($message . "\n", 3, '/tmp/php.log');
