<?php
    session_start();

    if (!empty($_POST['color']) && preg_match('/^#[0123456789abcdef]{6}$/', $_POST['color'])) {
        $_SESSION['color'] = $_POST['color'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Говносайт №2</title>
    </head>
    <body>
        <form method="POST">
            <select name="color">
                <option value="#ff0000">red</option>
                <option value="#00ff00">green</option>
                <option value="#0000ff">blue</option>
                <option value="#708030">?</option>
            </select>
            <br/>
            <input type="submit"/>
        </form>
    </body>
</html>
