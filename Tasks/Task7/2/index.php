<html>
<body>
    <form method="POST" action="">
        <label>Price:</label>
        <br/>
        <input type="text" name="price" value="<?=!empty($_POST['price'])?doubleval($_POST['price']):''?>">
        <br/><br/>
        <input type="submit" value="Order">
    </form>
<?php

if (!empty($_POST['price'])) {
    $credentials = json_decode(file_get_contents('../credentials.json'));

    try {
        $db = new PDO('mysql:host=127.0.0.1;dbname=task7', $credentials->username, $credentials->password);
        $sql = '
            SELECT
                dish_name,
                price
            FROM dishes
            WHERE price >= ?
            ORDER BY price ASC
        ';
        $stmt = $db->prepare($sql);
        $stmt->execute([doubleval($_POST['price'])]);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<p>', $row['dish_name'], ' ', $row['price'], '</p>';
        }
    } catch (PDOException $е) {
        print 'Database error: ' . $е->getMessage();
    }
}

?>
</body>
</html>
