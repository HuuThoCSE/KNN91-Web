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
        background-color: bisque;
    }
    table,tr,td,th{
        border: 1px black solid;
    }
</style>
<body>
    <h1>Mannerings Estate Agency </h1>
    <h2>Search for Propeties by Town</h2>
    <form action="search.php" method="get">
        <label for=""><a href="">Enter</a> a Town</label>
        <input id="txtTown" type="text"  name="town">
        <input id="query" type="submit" name="button" value="Search">
    </form>

    <?php
        $count =0;
        if(isset($_GET['button'])){
            if(isset($_GET['town']) && $_GET['town']!=""){
                $town = $_GET['town'];
                if($conn)
                {   
                    $sql = "select * from house where town like '%".$town."%'";
                    $res = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($res)>0)
                    {
                        echo "<table>";
                        echo "
                            <tr>
                            <th>Ref No</th>
                            <th>Town</th>
                            <th>Type</th>
                            <th>Bedroom</th>
                            <th>Price</th>
                            <th>Heating</th>
                            <a <th>Garage </th> </a>
                            </tr>";
                            while ($row=mysqli_fetch_assoc($res))
                            {
                                $count ++;
                                ?>
                                    <tr>
                                        <td><?php echo $row['REFNO'];?></td>
                                        <td><?php echo $row['TOWN'];?></td>
                                        <td><?php echo $row['TYPE'];?></td>
                                        <td><?php echo $row['BEDROOMS'];?></td>
                                        <td><?php echo $row['PRICE'];?></td>
                                        <td><?php echo $row['HEATING'];?></td>
                                        <td><?php echo $row['GARAGE'];?></td>
                                    </tr>
                                <?php
                            }
                        echo "<table>";
                        ?><p><?php echo $count;?> properties found</p><?php   
                    }else{
                        echo "<span>Không thể tìm thấy</span>";
                    }
                }
            }
            else
            {
                echo "<span>Vui lòng nhập tên thành phố</span>";
            }   

        }
            
    ?>
    
</body>
</html>