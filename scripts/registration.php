<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="./styles/favicon.ico">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/registration.css">
    <?php
    include "functions.php";
    print_r($files);
    $run = "Проверить";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    if($_POST['count']==1)
    {
    include "errors.php";
    $run = "Отправить";
    }
    $button= '<input class="formbutton" type="submit" value="'.$run.'">';
    @$check=file("../files/temp/check.txt");
    if($check[1]==1){
       include "write.php";
    }
    ?>
</head>
<body>
    <div class="all"><div class="cont">
    <ul class="hr"><li class="listyle"><a class="text" href="../Index.html">Главная</a></li>
    <li class="listyle"><a class="text" href="../scripts/Projects.php">Проекты</a></li>
    <li class="listyle"><a class="text" href="../scripts/learn.php">Уроки</a></li>
</ul>
</div>
    </div>
    <div class="main">
<div class="bottom">
    Здесь должен быть мой календарь и часы, может еще что то вроде колонки обновлений сайта, но будет реализовано позже, сейчас другие задачи в приоритете
</div>
    <div class=regformat>
        <div class='regform'>
    <form action="registration" method="post" enctype="multipart/form-data">
        <span class="textreg">Логин или почта</span>
        <input class="logininput" name="username" type="text" value="<?php echo $username?>">
        <span class="textreg">Пароль</span>
        <input class="logininput" name="password" type="password" value="<?php echo $password ?>">
        <input type="hidden" name="count" value="1">
        <span class="textreg">Подтверждение пароля</span>
        <input class="logininput" name="confirmpassword" type="password" value="<?php echo $confirmpassword?>">
        <span class="error"><?php echo $error;?>
        </span> 
        <span class="textreg">Фото профиля</span>
        <img class="preview" src="<?php echo $img_path;?>">
        <input class="fileform" type="file" name="filename">
        <?php echo $button ?>
    </form>
    <?php echo $button1 ?>
    <div>
    
    <?php
    /*
    while(is_dir(../users/id'.$id))
    {
       ++$id;
    }
    mkdir('../users/id'.$id,0777, true); 
    mkdir('../users/id'.$id.'/files',0777, true);
    echo $id;
    ?>
    <?php
    if ($_FILES['size']>10485760) {
    die("Размер не должен быть больше 10МБ");
    }
    else{
        $filedir='../users/id'.$id.'//files//';
        $filetemp = $_FILES['filename']['tmp_name'];
        $filenow =$_FILES['filename']['name'];
        $type = $_FILES['filename']['type'];
        print_r($_FILES);
        switch($type){
        case($type='image/jpeg'):
            mkdir($filedir.'/images',0777,true);
            move_uploaded_file($filetemp,$filedir.'//images//'.$filenow);break;
    }
}
    print_r($_POST);
    $username=$_POST['username'];
    $password=$_POST['password'];
    $user=$username.'&'.$password."\n";
    $userpath='../users/id'.$id.'/user.txt';
    file_put_contents($userpath, $user,FILE_APPEND);
       if (file_exists($userpath)){
        echo "Пользователь записан";
       }
    else 
    {
        echo "Пользователя не существует";
    }*/
    ?>
</div>
    </div>
</body>
</html>