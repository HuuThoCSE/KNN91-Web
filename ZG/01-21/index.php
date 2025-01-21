<?php
if(isset($_POST['inpSubmit'])){
    $timenow = time();
    $filename = basename($_FILES['inpFile']['name']);

    $target_file = "img/{$timenow}-{$filename}";

    if(!is_dir('img')){
        mkdir('img', 0777, true);
    }

    move_uploaded_file($_FILES['inpFile']['tmp_name'], $target_file);
}
?>


<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="inpFile" id="">
    <input type="submit" value="Submit" name="inpSubmit">
</form>