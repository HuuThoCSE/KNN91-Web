<?php 
session_start();
if(isset($_SESSION['id_account']))
{
$conn = mysqli_connect('localhost','root','','wd4_products');
mysqli_set_charset($conn, 'utf8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
    .cont{
        border:none;
        padding: 50px 50px 20px 30px;
        margin-bottom:50px;
    }
    .form-inline{  
        margin-top: 20px;
        display: flex;
        justify-content:space-between;
        margin-right: 73%;
    }
    label
    {
        margin-right:10px;
    }
    .form-inline .form-control{
        width:300px;
        border-color:#ccc;
    }
    .btn{
        margin-top: 20px;
        width: 70px;
        background-color:#4CAF50;
        border-color: #4CAF50;
    }
    .btn:hover{
        background-color:#4CAF50;
        border-color: #4CAF50;
    }
    table{
        border:1px #ccc solid;
        
    }
    h2{
        font-size:30px;
    }
    td, th{
        font-weight:bold;
        text-align:center;
    }
 
 
</style>
<body>
    <div class="cont form-control">
        
        <?php 
            if(isset($_SESSION['add']))
            {
                if($_SESSION['add']==='thanhcong')
                {
                    echo "<h3 style='color:green; text-align:center;'>Add Successful</h3>";
                }else{
                    echo "<h3 style='color:red;text-align:center;'>Add failed</h3>";
                }
            }
        ?>
        <h2>PRODUCT</h2>
        <form action="add.php" enctype="multipart/form-data" method="POST">
            <div class="form-inline">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>

            <div class="form-inline">
                <label for="price">Price</label>
                <input class="form-control" type="number" name="price" id="price">
            </div>

            <div class="form-inline">
                <label for="image">Image</label>
                <input class="form-control" type="file" name="image" id="image">
            </div>

            <div class="form-inline">
                <label for="cate">Category</label>
                <select class="form-control" name="cate" id="cate">
                    <?php 
                        if($conn)
                        {
                            $sql_cate = "select * from product_category";
                            $res_cate = mysqli_query($conn, $sql_cate);
                            while($row_cate = mysqli_fetch_assoc($res_cate))
                            {
                                ?>
                                <option value="<?php echo $row_cate['id_product_category']; ?>"><?php echo $row_cate['name']; ?></option>
                                <?php
                            }
                        }                      
                    ?>
                    
                </select>
            </div>
            <button type="submit" id="save" name="save" class="btn btn-primary" onclick="check_add()" >Save</button>
        </form><br>
        <div class="content">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>IMAGE</th>
                        <th>PRODUCT</th>
                        <th>PRODUCT CATEGORY</th>
                        <th>PRICE</th>
                    </tr>
                </thead>
                <tbody>
                        <?php 
                             if($conn)
                             {
                                 $sql_tab = "SELECT pr.image, pr.name as namepro, pc.name as nameproca, pr.price 
                                            from product pr, product_category pc 
                                            where pr.id_product_category = pc.id_product_category";
                                 $res_tab = mysqli_query($conn, $sql_tab);
                                 $no = 1;
                                 while($row_tab = mysqli_fetch_assoc($res_tab))
                                 {
                                     ?>
                                     <tr>
                                        <td><?php echo $no;?></td>
                                        <td> <img src="img/<?php echo $row_tab['image'];?>" alt="" width="100px" height="90px"> </td>
                                        <td><?php echo $row_tab['namepro'];?></td>
                                        <td><?php echo $row_tab['nameproca'];?></td>
                                        <td><?php echo $row_tab['price'];?>$</td>
                                     </tr>
                                     <?php
                                     $no++;
                                 }
                             }               
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<footer></footer>
</html>
<script>
    function check_add()
    {
        var name = document.getElementById("name").value;
        var price = document.getElementById("price").value;
        var name_arr = name.split(' ')
        var fileinput = document.getElementById("image");
       
        if(name == "" || name_arr.length < 2)
        {
            alert("name must have at least 2 words")
        }else if(price == "" || parseInt(price)<1000){
            alert(" Minimum product price is 1000 ")
        }
        else {
            var filelist = fileinput.files
            if(filelist.length === 0)
            {
                alert("please choose a image")
            }
            else{
                var file = filelist[0]
                var filename = file.name
                var fileextention = filename.split('.').pop().toLowerCase()

                if(fileextention != 'png' && fileextention != 'jpg')
                {
                    alert("Product photos have extensions png or jpg")
                }
            }
        }
        
    }
</script>
<?php }else{
    
    header('location:login.php');
}?>