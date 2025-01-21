<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .table {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Product</h1>
    <form action="add.php" onsubmit="return checkdata(this)" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Name:</td>
                <td><input name="pname" type="text" id="pname" placeholder="Product name"></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input name="pprice" type="number" id="pprice" placeholder="Product price"></td>
            </tr>
            <tr>
                <td>Image:</td>
                <td><input name="pimg" type="file" id="pimg" accept="image/png, image/jpeg"></td>
            </tr>
            <tr>
                <td>Category:</td>
                <td><select name="pc" id="pc">
                        <?php
                        $conn = new mysqli('localhost', 'root', '', 'Products');
                        if ($conn->connect_error) {
                            echo "<script>aler('Error can't connect to database!')</script>";
                        } else {
                            $data = $conn->query("select id_product_category,name from Product_Category");
                            if ($data->num_rows > 0) {
                                while ($row = $data->fetch_assoc()) {
                                    echo "<option value='" . $row["id_product_category"] . "'>" . $row["name"] . "</option>";
                                }
                            }
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" class="btn btn-success">Save</button>
                </td>
            </tr>
        </table>
    </form>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>IMAGE</th>
            <th>PRODUCT</th>
            <th>PRODUCT CATEGORY</th>
            <th>PRICE</th>
        </tr>
        <tr>
            <td></td>
            <?php
            if (!$conn->connect_error) {
                $data = $conn->query("select id_product,image,Product.name as name1,Product_Category.name as name2,price from Product,Product_Category where Product.id_product_category=Product_Category.id_product_category");
                if ($data->num_rows > 0) {
                    while ($row = $data->fetch_assoc()) {
                        echo "<tr>";
                        foreach ($row as $key => $value) {
                            if ($key == "image") {
                                echo "<td><img src='" . $value . "' style='width: 5vh;'></td>";
                            } else {
                                echo "<td>" . $value . "</td>";
                            }
                        }
                        echo "</tr>";
                    }
                }
            }
            ?>
        </tr>
    </table>
    <script>
        function checkdata(e) {
            var pname = document.getElementById('pname').value;
            var prpice = document.getElementById('pprice').value;
            var pimg = document.getElementById('pimg');
            console.log(pname.length > 1, prpice != '', Number(prpice) >= 1000, pimg.files.length > 0);
            if (!(pname.length > 1 && prpice != '' && Number(prpice) >= 1000 && pimg.files.length > 0)) {
                return false;
            } else {
                return true;
            }
        }
    </script>
</body>

</html>