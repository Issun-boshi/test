<?php

$credentials = json_decode(file_get_contents('../credentials.json'));

try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=task7', $credentials->username, $credentials->password);
    $query = $db->query('
        SELECT
            dish_name,
            price
        FROM dishes
        ORDER BY price ASC
    ');
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        var_dump($row);
    }
} catch (PDOException $е) {
    print 'Database error: ' . $е->getMessage();
}
