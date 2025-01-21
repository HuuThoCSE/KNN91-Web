<?php 
    $conn = mysqli_connect('localhost', 'root', '','wd05_books');
    mysqli_set_charset($conn, 'utf8');
    if(isset($_GET['id']))
    {
        $id= $_GET['id'];
        $sql_detail = "SELECT book.id_book, name, bc.book_category, book.description, view,image
        from book, books_category bc
        where book.id_book_category = bc.id_book_category and id_book =".$id;
        $res_detail = mysqli_query($conn, $sql_detail);
        if(mysqli_num_rows($res_detail)>0)
        {
            
            $error = false;
            $row_detail = mysqli_fetch_assoc($res_detail);
            $title = $row_detail['name'];
            $desciption = $row_detail['description'];
            $category = $row_detail['book_category'];
            $image = $row_detail['image'];
            $view = $row_detail['view'];
            $view ++;

            //update view
            $sql_up_view = "update book set view = ".$view." where id_book =".$id;
            $res_upview = mysqli_query($conn, $sql_up_view);
        }else{
            $error = true;
        }
    }
    else{
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
    .banner{
        background-image: url('/img/sky.jpg');
        background-position: center;
        background-size: cover;
        width: 100%;
        height: 350px;
        position: relative;
    }
    .menu{
        width: 100%;
        height: 100px;
        background-color: black;
        opacity: 0.5;
        position: absolute;
        bottom: 0%;
        display: flex;  
    }
    ul{
        width: 90%;
        margin-left: 50px;
        list-style: none;
        display: flex;   
        justify-content: space-between;
    }
    li{ 
        font-size: 25px;
        line-height: 65px;
        margin-right: 30px;
        color: white;
    }
    h1
    {
        font-size: 60px;
        font-family: Arial;
    }
    .title{
        color: white;
        margin-top: 40px;
        margin-left: 70px;
        position: absolute;
    }
    .title p{
        font-size: 25px;
        margin-top: -30px;
    }
    a{
        text-decoration: none;
        
    }
    .content{
        margin: 50px auto;
        width: 90%;
    
        height: fit-content;
        position: relative;
    }
    .detail{
        display: flex;
    }
    img{
        width: 100%;
        height: 500px;
    }
    h3{
        font-size: 25px;
        color: blue;
    }
    #gioithieu{
        font-size: 18px;
    }
    label, label ~ p{
        font-size: 19px;
        color: blue;
        display:inline-block;
    }
    label{
        margin-right: 5px;
    }
    button{
        width: 160px;
        padding: 5px;
        height: 45px;
        font-size: 15px;
        margin-right: 10px;
        border: none;
        cursor: pointer;
        
    }
    #review{
        color:darkblue;
        background-color: lightgray;
    }
    #download{
        color: whitesmoke;
        background-color: darkblue;
    }
    .detail ~ p{
        font-size: 20px;
        margin-top: 30px;
        margin-bottom: 30px;
        font-weight: bold;
        
    }
    .related{
        display: flex;
    }
    .book_related img
    {
        width: 380px;
        height: 500px;
    }
    .book_related p{
        text-align: center;
        margin-top: -6px;
        font-size: 18px;
    }
    .book_related{
        margin-right: -42px;
    }
    footer{
        background-color: black;
        height: 45px;
        color: aliceblue;
        width: 100%;
        margin: 0;
        padding: 0;
        bottom:0%;
        line-height: 45px;
        text-align: center;
        font-size: 20px;
    }
    li:hover{
        color:deepskyblue;
    }
    #pages{
        display: flex;
        margin: 10px auto;
        width: 100%;
    }

    #page{
        color: white;
        background-color: green;
        border-radius: 5px;
        width: 50px;
        height: 50px;
        margin-right: 7px;
        text-align:center;
        line-height: 50px;
        font-size:22px;
    }

</style>
<body>
    <?php if($error==false)
    {
        ?>
        <div class="banner">
        <div class="title">
            <h1>SHELF</h1>
            <P>Your Online Bookstore</P>
        </div>
        <div class="menu">
            <ul>
              <a href="listbook.php"><li >Home</li></a>  
              <a href=""> <li >Catalogs</li></a>  
              <a href=""> <li >Awards</li></a>  
              <a href=""> <li >Our Team</li></a>  
              <a href=""> <li >Contact Us</li></a>  
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="detail">
            <img src="/img/book1.jpg" alt="">
            <div class="content_book">
                <h3 id="bookname"><?php echo $title ?></h3>
                <p id="gioithieu">
                    <?php echo $desciption ?>
                </p>
                    <label for="cate">Categories: </label>
                    <p style="margin-bottom: -100px;" id="cate"><?php echo $category ?></p>              
                    <br>
                    <label  for="view">Views: </label>
                    <p id="view"><?php echo $view ?></p>
                <div id="bts">
                    <button id="review">Review</button>
                    <button id="download">Download</button>
                </div>
            </div>
        </div>
        <p>Related books</p>
        <div class="related">
            <?php 
                $sql_related = "select  id_book,name, image from book 
                                where name like '%$title%'
                                limit 5";
                $res_ralated = mysqli_query($conn, $sql_related);
                //echo mysqli_num_rows($res_ralated);exit;
                if(mysqli_num_rows($res_ralated)>0)
                {
                    while($row_related = mysqli_fetch_assoc($res_ralated))
                    {
                        if($row_related['name']!=$title)
                        {
                            ?>

                           <a href="index.php?id=<?php echo $row_related['id_book'];?>"> 
                                <div class="book_related">
                                    <img src="img/<?php echo $row_related['image'];?>" alt="">
                                    <p><?php echo $row_related['name']?></p>
                                </div>
                            </a>
                            <?php
                        }
                        
                    }
                }
            ?>
        </div>
        <div id="pages">
            

        </div>
    </div>
   <?php }
   else{
        echo " <div style='color:red;text-align:center;font-size:50px;margin: auto 5px; width:100%;'>404</div>";
   }
   ?>
<footer id="ft">
    Copyright @ 2018
</footer>
</body>
</html>
<script>
   $(document).scroll(function(e){
        var scroll_amount = $(window).scrollTop(); 
        var document_height = $(document).height();

        var scroll_percent = (scroll_amount / document_height) * 100
        if(scroll_percent>=70)
        {
           handle_ajax();
           document.getElementById('ft').innerHTML= "Page content is out"
        }
    });
    
    
    function handle_ajax()
    {
        var name = document.getElementById('bookname').innerHTML;
        var pages = document.getElementById('pages');
        $.ajax({
            type: 'POST',
            url: 'handleAjax.php',
            data: {namebook: name},
            success: function(response){
                var numpage = Math.round(response / 4) ;
                if(pages.childElementCount===0)
                {
                    for(var i=1; i<=numpage; i++)
                    {
                        pages.innerHTML += "<div id='page'>"+i+"</div>"
                    }
                }
               
            }
        })
    }

</script>