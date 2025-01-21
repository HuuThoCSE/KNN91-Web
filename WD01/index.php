
<?php
    $conn= mysqli_connect('localhost', 'root','','wd01_mannerings');
    mysqli_set_charset($conn,'utf8')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color:bisque;
    }
</style>
<body>
    <h1>Mannerings Estate Agency</h1>
    <ul>
        <li><a href="display.php">Display on properties</a></li>
        <li><a href="search.php">Search for properties by town</a></li>
    </ul>
</body>
</html>