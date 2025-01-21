<?php
$conn = new mysqli("localhost", "root", "", "mannerings");
if (mysqli_connect_errno()) {
    echo "data base error";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display question 3</title>
    <style>
        table {
            border: 1px solid black;
        }

        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1>Mannerings Estate Agency for Sale</h1>
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
        $data = $conn->query("select * from houses");
        while ($row = $data->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $key => $value) {
                echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <?php
    echo $data->num_rows . " properties found.";
    ?>
</body>

</html>