<?php 
    $conn = mysqli_connect('localhost','root', '','wd5_books');
    mysqli_set_charset($conn, 'utf8');
    $name = $_POST['namebook'];
    $sql_related = "select * from book  where name like '%$name%'";
    $res_ralated = mysqli_query($conn, $sql_related);
    if(mysqli_num_rows($res_ralated)>0)
    {
        echo mysqli_num_rows($res_ralated);
    }
?>