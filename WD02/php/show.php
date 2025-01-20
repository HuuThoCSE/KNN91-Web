<?php
 $conn=new mysqli("localhost","root","","cites_wd02");
 if(isset($_POST['country'])){
    $query="SELECT ct.Name as city, c.Name as country
    from cities ct, countries c
    where ct.country_code ='".$_POST['country']."'
     and ct.country_code=c.code
    order by ct.population desc
    limit ".$_POST['top'];
    $result=mysqli_query($conn,$query);
 }
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
        font-family:Arial, Helvetica, sans-serif;
    }
    table{
        margin: auto;
    }
    td{
        border: 2px blue solid;
    }
    .td1{
        background-color: #1bb1de;
        color: aliceblue;
    }
</style>
<body>
    <div style="width:80%; height:260px; background-image: url('world2.jpg'); background-position: center;margin:50px auto">
    <div style="font-size:30px;font-weight:bold;text-align:center;padding-top:10px">Top 3 Biggest Cities</div>
    <div style="margin-top:15px;text-align:center">
        <table border="2" cellpadding="2" cellspacing="2">
            <tr>
                <td class="td1">City</td>
                <td class="td1">Population</td>
            </tr>
            <?php
                if($result!=null)
                while($row=$result->fetch_assoc()){
                ?>
                    <tr>
                        <td><?php  echo $row["city"]?></td>
                        <td><?php echo $row["country"] ?></td>
                    </tr>
                <?php
                }
            ?>
        </table>
    </div>
</div>
    
</body>
</html>