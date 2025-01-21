<?php
$name = isset($_POST['name']) ? $_POST['name'] : '';
echo 'The name is: ' . $name;

if (isset($_FILES['file'])) {
    $target_file = "img/" . time() . ".png";
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    echo '<br>The file is: ' . $target_file;
}
?>