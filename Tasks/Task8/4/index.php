<html>
<body>
<form>
<input type="text" name="file" value="<?=!empty($_GET['file']) ? htmlspecialchars($_GET['file']) : ''?>"/>
<input type="submit"/>
</form>
<?php 

if (!empty($_GET['file'])) {
    $template_file = realpath(__DIR__ . '/catalog/' . htmlspecialchars($_GET['file']));

    if ($template_file !== false && file_exists($template_file)) {
        if (is_readable($template_file)) {
            $template = file_get_contents($template_file);
            echo '<p>' . htmlspecialchars($template) . '</p>';
        } else {
            echo '<p>Couldn\'t read file</p>';
        }
    } else {
        echo '<p>File does not exist</p>';
    }
}

?>
</body>
</html>
