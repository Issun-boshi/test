<?php

$list = [
    '1984678' => 'Книга',
    '3255867' => 'Тетрадь',
    '7969999' => 'Скотч',
    '3768679' => 'Нож',
    '8767946' => 'Молоток',
    '7568724' => 'Бумага'
];

session_start();

if (!empty($_POST)) {
    unset($_SESSION['cart']);
    header('Location: http://127.0.0.1:8000/Tasks/Task9/4/list.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Говносайт №3</title>
    </head>
    <body>
        <?php foreach ($list as $key => $value):
            if (!empty($_SESSION['cart'][$key]) && $_SESSION['cart'][$key] > 0):?>
                <p><?=$value?> <?=$_SESSION['cart'][$key]?>шт.</p>
            <?php endif;
        endforeach;?>
        <form method="POST">
            <input type="submit" name="name"/>
        </form>
    </body>
</html>
