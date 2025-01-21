<?php
    if(isset($_GET['user'])&&isset($_GET['pwd'])){
        if(md5($_GET['pwd'])=='a141c47927929bc2d1fb6d336a256df4' && $_GET['user']=='Tho'){
            session_start();
            $_SESSION['id']=1;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= md5('abc1234')
    // a141c47927929bc2d1fb6d336a256df4
    ?>
    <form action="">
        <input type="text" name='user' id='user'>
        <input type="password" name='pwd' id='pwd'>
        <button type='submit' id='btn' disabled>Login</button>
    </form>
    <?php 
    // session_start();
    if(isset($_SESSION['id'])){
        echo '<button> You can click me </button>';
    }
    ?>
    <script>
        // document.getElementById('pwd').addEventListener('input',function(){
        //     var btn = document.getElementById('btn');
        //     var pwd = document.getElementById('pwd');
        //     if (pwd.value!=''){
        //         btn.removeAttribute('disabled');
        //     }else{
        //         btn.setAttribute('disabled',1);
        //     }
        // });
        document.getElementById('user').addEventListener('input',function(){
            var btn = document.getElementById('btn');
            var user = document.getElementById('user').value;
            var re=/\S+@\S+\.\S+/;
            console.log(re);
            if (re.test(user)){
                console.log('asd');
                btn.removeAttribute('disabled');
            }else{
                btn.setAttribute('disabled',1);
            }
        });
    </script>
</body>
</html>