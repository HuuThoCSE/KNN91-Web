<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: sans-serif;
        background-color: #ffffcc;
    }
    table, th, td {
        border: 1px solid black;
    }
</style>
<body>
    <h1>Mannerings Estate Agency</h1>

    <h3>Search for Properties by Town</h3>

    <form action="" method="get">
        <span><u>Enter</u></span> a Town <input type="text" name="txtTown" id="">
        <input type="submit" value="Search" name="sbSearch" id="query">
    </form>

    <div>
        <?php
        if (isset($_GET['sbSearch']) && !empty(trim($_GET['txtTown']))) {
            $town = htmlspecialchars(trim($_GET['txtTown'])); // Xử lý đầu vào
    
        ?>
    </div>

    <table>
        <tr>
            <td>Ref No</td>
            <td>Town</td>
            <td>Type</td>
            <td>Bedrooms</td>
            <td>Price</td>
            <td>Heating</td>
            <td>Garage</td>
        </tr>

        <?php
        include 'conn.php';
        $sql = "SELECT * FROM houses WHERE TOWN = '{$_GET['txtTown']}'";
        if($rs = mysqli_query($cnn, $sql))
            while($rw = $rs->fetch_assoc())
                echo "<tr>
                    <td>{$rw['REFNO']}</td>
                    <td>{$rw['TOWN']}</td>
                    <td>{$rw['TYPE']}</td>
                    <td>{$rw['BEDROOMS']}</td>
                    <td>{$rw['PRICE']}</td>
                    <td>{$rw['HEATING']}</td>
                    <td>{$rw['GARAGE']}</td>
                    </tr>
                    ";
        ?>
    </table>
    <?php
    }
    ?>
</body>
</html>