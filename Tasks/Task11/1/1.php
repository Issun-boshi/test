<?php
$name = 'Umberto';

function say_hello() {
    global $name;

    print 'Hello, ';
    print $name;
}

say_hello();
?>
