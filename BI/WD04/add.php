<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("Location: login.php");
}
if (isset($_POST["pname"])) {
    $target_file = "img/" . time() . ".png";
    move_uploaded_file($_FILES["pimg"]["tmp_name"], $target_file);
    $query = "insert into Product (id_product_category, id_account, name, image, price) VALUES (" . $_POST["pc"] . "," . $_SESSION["id"] . ",'" . $_POST["pname"] . "','" . $target_file . "'," . $_POST["pprice"] . ")";
    $conn = new mysqli('localhost', 'root', '', 'Products');
    if ($conn->connect_error) {
        echo "<script>aler('Error can't connect to database!')</script>";
    } else {
        $conn->query($query);
        header('Location: index.php');
        exit();
    }
}
?>