<?php 
session_start();
$id = $_SESSION['id_account'];
$conn = mysqli_connect('localhost','root','','wd4_products');
mysqli_set_charset($conn, 'utf8');
if($conn)
{
    if(isset($_POST['save']))
    {
        $name = $_POST['name'];
        $image = $_FILES['image']['name'];
        $price = $_POST['price'];
        $cate = $_POST['cate'];

        $path = 'img/'.$image;
        move_uploaded_file  ($_FILES['image']['tmp_name'],$path);

        $sql = "INSERT INTO product (id_product_category,id_account,name,image,price) 
        VALUES ($cate,$id ,'$name','$image',$price)";
        $res = mysqli_query($conn, $sql);
        if($res !=null)
        {
            $_SESSION['add']='thanhcong';
           
        }
        else{
            $_SESSION['add']='thatbai';
            
        }
        header('location:index.php');
    }
}
    

?>