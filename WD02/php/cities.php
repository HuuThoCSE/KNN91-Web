<?php
    $conn= new mysqli("localhost","root", "","cites_wd02")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .header
    {
    display: flex;
    align-items: center;
    margin-top: 25px;
    padding-top: 15px;
    }
    .header img{
       
        margin-left: 35%;
        width: 100px;
    }
    h1{
        margin-left: 20px;
        color: rgb(65, 238, 30);
        -webkit-text-stroke: 2px rgb(19, 59, 238);
        font-weight: bold;
        font-size: 60px;
    }
</style>
<body>
    <div style="width:80%; height:260px; background-image: url('world2.jpg'); background-position: center;margin:50px auto">
    <div class="header">
        <img src="./world-globe.png" alt="">
        <h1>City Searcher</h1>
    </div>
    <p style="margin-left: 40%;">Choose a country, and we will show you its largest cities</p>
    <div>
        <form method="post" action="show.php">
            <select style="width: 250px; margin-left: 38%;" name="country" >
            <?php
                $query = "SELECT * from countries";
                $result= mysqli_query($conn,$query);
                if($result!=null){
                    while($row=$result->fetch_assoc()){
            ?>
                <option value="<?php echo $row["code"] ?>"><?php echo $row["Name"] ?></option>
            <?php
                    }
                }
            ?>

            <option value="">United States</option>
            </select>
            <select name="top" id="">
                <option value="1">top 1</option>
                <option value="2">top 2</option>
                <option value="3">top 3</option>
            </select>
            <button style="border-color: blue;">Submit Query</button>

        </form>
    </div>
    </div>
    
</body>
</html>