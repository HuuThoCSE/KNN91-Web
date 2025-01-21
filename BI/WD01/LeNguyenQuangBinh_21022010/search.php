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
    <title>Search question 3</title>
</head>

<body>
    <h1>Mannerings Estate Agency</h1>
    <h3>Search for properties by Town</h3>
    <p>Enter a Town</p>
    <input type="text" id="txtTown">
    <button id="query">Search</button>
    <?php
        $data=null;
        if($_GET['town']!=null and $_GET['town']!=''){
            $data = $conn->query("select * from houses where town like '%".$_GET['town']."%'");
        }
        if($data != null and $data->num_rows> 0){
            echo "<table>";
            while($row = $data->fetch_assoc()){
                echo "<tr>";
                foreach($row as $key => $value){
                    echo "<td>".$value."<td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    ?>
    <script>
        document.getElementById('query').addEventListener('click',function(){
            window.location="search.php?town="+document.getElementById('txtTown').value;
        });
    </script>
</body>

</html>