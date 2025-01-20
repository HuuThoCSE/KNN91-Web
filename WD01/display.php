<?php
    $conn= mysqli_connect('localhost', 'root','','mannerings_wd1' );
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
    table,tr,td,th{
        border: 1px black solid;
    }
    body{
        background-color:bisque;
    }
</style>
<body>
    <h1>Mannerings Estate Agency - Properties for Sale</h1>
    <table>
        <tr>
            <th>Ref No</th>
            <th>Town</th>
            <th>Type</th>
            <th>Bedroom</th>
            <th>Price</th>
            <th>Heating</th>
            <th><a href="">Garage</a></th>
        </tr>
            <?php

                if($conn)
                {
                    $sql = "select * from house";
                    $res = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($res)>0)
                    {
                        $count = 0;
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
                    }
                }
            ?>
    </table>
    <p><?php echo $count;?> properties found</p>
</body>
</html>