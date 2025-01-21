<?php
    session_start();
    if (isset($_GET['username']) && isset($_GET['pwd'])){
        $conn=new mysqli('localhost','root','','Products');
        if ($conn->connect_error) {
            echo "<script>aler('Error can't connect to database!')</script>";
        }else{
            echo "select id_account from Account where email='".$_GET['username']."' and pass='".md5($_GET['pwd'])."'";
            $data=$conn->query("select id_account from Account where email='".$_GET['username']."' and pass='".md5($_GET['pwd'])."'");
            if ($data->num_rows > 0) {
                $row=$data->fetch_assoc();
                $_SESSION["id"]= $row["id_account"];
            }
        }
    }

    if(isset($_SESSION["id"])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        p{
            margin: 0px;
        }
        input{
            border: 1px solid #ccc;
        }
        button{
            background-color: #4CAF50;
        }
    </style>
</head>
<body>
    <h1>Login Page Product Manager</h1>
    <p>Username</p>
    <input type="email" id="username" placeholder="Enter Username">
    <p>Password</p>
    <input type="password" id="password" placeholder="Enter Password"><br><br>
    <button type="submit" class="btn btn-success" id="login">Login</button>
    <script>
        document.getElementById('login').addEventListener('click', function(){
            var user=document.getElementById('username').value;
            var password=document.getElementById('password').value;
            var re=/\S+@\S+\.\S+/;
            if(re.test(user)){
                re=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^*()-=]).{6,}/;
                if(re.test(password)){
                    window.location='?username='+user+'&pwd='+password;
                }
            }
            
        });
    </script>
</body>
</html>