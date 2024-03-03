<html>
<body>
    <form method="POST" action="">
        <label>Name:</label>
        <br/>
        <input type="text" name="name"/>
        <br/>
        <label>Number:</label>
        <br/>
        <input type="tel" name="phone"/>
        <br/>
        <label>Dish:</label>
        <br/>
        <select name="dish">
            <option value="">Choose value</option>
            <option value="1">Soup 1</option>
            <option value="2">Salad 2</option>
            <option value="3">Main 3</option>
        </select>
        <br/><br/>
        <input type="submit" value="Order"/>
    </form>
</body>
</html>
<?php

function exceptionHandler($e) {
    error_log($e->getMessage() . "\n", 3, '/tmp/php.log');

    die('error!');
}
set_exception_handler('exceptionHandler');

if (!empty($_POST['name']) && !empty($_POST['phone'] && !empty($_POST['dish']))) {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $dish = (int)$_POST['dish'];

    $credentials = json_decode(file_get_contents('../credentials.json'));
    $db = new PDO('mysql:host=12712312312321.0.0.1;dbname=task7', $credentials->username, $credentials->password);
    $sql = '
        INSERT INTO restaurant
        (`name`, `number`, `dish_id`)
        VALUES
        ("' . $name . '", "' . $phone . '", "' . $dish . '")
    ';
    $db->exec($sql);
}
