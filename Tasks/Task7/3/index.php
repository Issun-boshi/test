<?php
$credentials = json_decode(file_get_contents('../credentials.json'));

$db = new PDO('mysql:host=127.0.0.1;dbname=task7', $credentials->username, $credentials->password);
$sql = '
    SELECT *
    FROM dishes
';
$stmt = $db->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
<body>
    <form method="POST" action="">
        <label>Dish:</label>
        <br/>
        <select name="dish">
            <?php foreach ($rows as $row): ?>
                <option value="<?=$row['dish_id']?>"<?=(int)$_POST['dish'] === $row['dish_id'] ?' selected':''?>><?=$row['dish_name']?></option>
            <?php endforeach; ?>
        </select>
        <br/><br/>
        <input type="submit" value="Order"/>
    </form>
    <?php if (!empty($_POST['dish'])):?>
        <div>
            <?php foreach ($rows as $row):
                if ((int)$_POST['dish'] === $row['dish_id']):?>
                    <p><?=$row['dish_id'],' ', $row['dish_name'],' ', $row['price'],' ', $row['is_spicy']?></p>
                <?php endif;
            endforeach; ?>
        </div>
    <?php endif;?>
</body>
</html>
