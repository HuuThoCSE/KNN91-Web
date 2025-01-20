<?php 
    session_start();
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
    .form-control{
        width:60%;
    }
    label{
        font-weight:bold;
        display: flex;
        align-items: left;
        margin-left:150px;
        margin-top:10px;
    }
    .btn{
        margin-top: 20px;
        width: 60%;
        background-color:#4CAF50;
        border-color: #4CAF50;
    }
    input{
        border-color:#cccc;
    }
    h1{
        font-size:30px;
    }
    .btn:hover{
        background-color:#4CAF50;
        border-color: #4CAF50;
    }
    
</style>
<body>
    <center>
        <div style="margin-top:20px; height:300px; width:50%;" class="login form-control">        
            <h1>LOGIN PAGE PRODUCT MANAGER</h1>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="email">Username</label>
                    <input class="form-control" type="email" id="email" name = "email" placeholder="Enter Username">

                    <label for="password">Password</label>
                    <input  class="form-control" type="password" id="password" name = "password" placeholder="Enter Password">

                    <input id="login" type="submit" class="btn btn-primary" name="login" value="Login">
                </div>
            </form>
        </div>
       
        <?php 
            if($conn)
            {
            
                if(isset($_POST['login']))
                {
                    $mail = $_POST['email'];
                    $pw = $_POST['password'];

                    $sql = "select * from account where email='".$mail."' and pass = '".$pw."'";
                    $res = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($res) > 0)
                    {
                            $row = mysqli_fetch_assoc($res);
                            
                            $_SESSION['id_account'] = $row['id_account'];
                          
                            header('location:index.php');
                    }
                    else{
                            echo " <h4 style='color:red;'>Login Failed</h4>";
                    }
                }
            }
        ?>
    </center>
</body>
</html>

<script>
    var mail = document.getElementById('email')
    mail.addEventListener('blur',() =>{
        var char_mail =  /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var bt = document.getElementById('login')
        
        if(mail.value==="" && !char_mail.test(mail.value))
        {
            bt.disabled= true;
        }else{
            bt.disabled= false;
        }
    });

    var pw = document.getElementById('password')
    pw.addEventListener('blur',() =>{
        var check_digit = /\d/;
        var check_character= /[a-zA-Z]/;
        var check_special = /[!@#$%^&*(),.?":{}|<>]/;
        var bt = document.getElementById('login')

        if(pw.value.length < 6 ||
            !check_digit.test(pw.value)||
            !check_character.test(pw.value) ||
            !check_special.test(pw.value))
        {
         
            bt.disabled= true;
        }
        else{
            bt.disabled= false;
        }
    });
</script>