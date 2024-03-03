<?php

// подключиться к базе данных
try {
    $credentials = json_decode(file_get_contents(__DIR__ . '/../credentials.json'));
    $db = new PDO('mysql:host=127.0.0.1;dbname=task7', $credentials->username, $credentials->password);
} catch (Exception $e) {
    die('Can\'t connect: ' . $e->getMessage());
}

// организовать обработку исключений
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// установить режим извлечения строк из таблицы в виде массивов
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// получить массив наименований блюд из базы данных
$dish_names = [];
$res = $db->query('SELECT dish_id, dish_name FROM dishes');
foreach ($res->fetchAll() as $row) {
    $dish_names[$row['dish_id']] = $row['dish_name'];
}
$res = $db->query('SELECT * FROM `restaurant` ORDER BY `name` ASC');
$customers = $res->fetchAll();

if (count($customers) === 0) {
    print 'No customers.';
} else {
    print '<table>';
    print '<tr><th>ID</th><th>Name</th><th>Number</th>
    <th>Favorite Dish</th></tr>';
}

foreach ($customers as $customer) {
    printf("<tr><td>%d</td><td>%s</td>
    <td>%f</td><td>%s</td>
    </tr>\n",
    $customer['id'],
    htmlentities($customer['name']),
    $customer['number'],
    $customer['dish_id']);
}
print '</table>';
