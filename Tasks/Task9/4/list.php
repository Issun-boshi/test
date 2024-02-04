<?php

$list = [
    '1984678' => 'Книга',
    '3255867' => 'Тетрадь',
    '7969999' => 'Скотч',
    '3768679' => 'Нож',
    '8767946' => 'Молоток',
    '7568724' => 'Бумага'
];

$cart = [];
foreach ($list as $key => $value) {
    if (!empty($_POST[$key]) && $_POST[$key] > 0) {
        $cart[$key] = (int)$_POST[$key];
    }
}

if (!empty($cart)) {
    session_start();
    $_SESSION['cart'] = $cart;
    header('Location: http://127.0.0.1:8000/Tasks/Task9/4/checkout.php');
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Говносайт №3</title>
    </head>
    <body>
        <form method="POST">
            <?php foreach ($list as $key => $value):?>
                <label for="<?=$key?>"><?=$value?></label>&nbsp;<input type="number" name="<?=$key?>" value="0" min="0"/><br/>
            <?php endforeach;?>
            <br/>
            <input type="submit"/>
        </form>
    </body>
</html>
