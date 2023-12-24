<html>
<body>
<form>
<input type="text" name="file" value="<?=!empty($_GET['file']) ? htmlspecialchars($_GET['file']) : ''?>"/>
<input type="submit"/>
</form>
<?php 

if (!empty($_GET['file'])) {
    $path_parts = pathinfo(htmlspecialchars($_GET['file']));

    if ($path_parts['extension'] === 'html') {
        $template_file = realpath(__DIR__ . '/catalog/' . $path_parts['basename']);

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
    } else {
        echo '<p>Unsupported extension</p>';
    }
}

?>
</body>
</html>
