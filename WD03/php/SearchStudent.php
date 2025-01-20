<?php
 $conn = mysqli_connect("localhost","root","","mana_ commodity_wd03");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
 #title{
    font-weight: bold;
    color: blue;
    font-size: larger;
    margin-left: 50px;
 }
 input{
    border-radius: 6px;
    margin-left: 5px;
    margin-top: 7px;
    height: 40px;
    width: 180px;
 }
 button{
    border-radius: 6px;
    border: 2px white solid;
    height: 45px;
    width: 100px;
    background-color:cadetblue;
    color: white;
    font-weight: bold;
 }
 :hover button{
    color:cadetblue;
    background-color: white;
    border: 2px black solid ;
 }

 table{
    width: 40%;
    border: 2px solid black;
    margin-top:5px;
    border-collapse: collapse;
    background-color:aquamarine ;
 }
 td{
    border: 2px solid black;
    text-align: center;
 }
</style>
<body>
    <div id="title"><h1>Search STUDENT</h1></div>
    <div style="background-color:cadetblue; width:300px; height:60px">
        <form action="" method="post">
            <input type="text" placeholder="Enter Full Name" name="fullname">
            <button type="submit" name="search">Search</button>
        </form>
    </div>
    <table>
        <tr>
            <td colspan="4" style="width:70px; text-align:center; font-weight: bolder;color:red" >Result of search</td>
        </tr>
        <tr id=row-col-title>
            <td class="row-col">No</td>
            <td class="row-col">Student_ID</td>
            <td class="row-col">Full_Name</td>
            <td class="row-col">Class_Name</td>
        </tr>
        <?php
        if (isset($_POST["search"])){
            $fullname = $_POST["fullname"];
            if(empty($fullname)){
                $query = "SELECT students.Student_ID, CONCAT( students.S_LastName,' ',students.S_FirtName) AS 'fullname', classes.Class_Name
                FROM students
                JOIN classes on classes.Class_ID = students.Class_ID";
            }else{
                $query = "SELECT students.Student_ID, CONCAT( students.S_LastName,' ',students.S_FirtName) AS 'fullname', classes.Class_Name
                FROM students
                JOIN classes on classes.Class_ID = students.Class_ID
                WHERE CONCAT( students.S_LastName,' ',students.S_FirtName) = '".$fullname."' ";
            }
            $result = mysqli_query($conn,$query);
            $i=1;
            while($row=mysqli_fetch_assoc($result)){
            ?>
                <tr style="background-color:white">
                    <td class="row-col"><?php echo $i ?></td>
                    <td class="row-col"><?php echo $row["Student_ID"] ?></td>
                    <td class="row-col"><?php echo $row["fullname"] ?></td>
                    <td class="row-col"><?php echo $row["Class_Name"] ?></td>
                </tr>
            <?php
                $i++;
            }
        }
        ?>
    </table>

</body>
</html>