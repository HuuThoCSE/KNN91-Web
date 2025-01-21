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
    }
    table, th, td {
        border: 1px solid black;
    }
</style>
<body>
    <h1>Mannerings Estate Agency - Progerties for Sale</h1>

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

        $sql = 'SELECT * FROM houses';

        $num_load = 0;

        if($rs = mysqli_query($cnn, $sql))
            $num_load = mysqli_num_rows($rs);
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
    <?= $num_load  ?> properties found.
</body>
</html>