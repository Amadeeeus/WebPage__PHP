<?php 
function file_check(&$a,&$b)/*var- $_FILES and $_POST*/
{
    {
        if($_FILES['filename']['type']!=='image/jpeg'&&$_FILES['filename']['type']!=0)
{
	$error_count = 2;
    
}
else{
move_uploaded_file($_FILES['filename']['tmp_name'],"../files/temp/images/".$_FILES['filename']['name']);
}
    }
    return $error_count;
}

function err_Count(&$a)/*var - $error_count*/
{
 switch($a){
case($a===1): $error = "Подтвердите правильность введенных данных"; break;
 case($a===2): $error = "Изображение должно быть в формате jpeg"; break;
 case($a===3): $error = "Необходимо ввести пароль"; break;
 case($a===4): $error = "Пароли не совпадают"; break;
 case($a===5): $error="Пользователь с такими данными уже существует"; break;
 case($a===6): $error="Пользователь создан"; break;
 }
 return $error;
}

function err_Pass(&$a){/*var- $_POST*/
    $password=$_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    if ($password==0) $error_count=3;
    if($password!==$confirmpassword) $error_count = 4; 
    return $error_count;
}
function create_user(&$a,&$b,&$c)/*var- $id and $_POST*/
{   
    mkdir('../users/id'.$a,0777, true);
    mkdir('../users/id'.$a.'/files',0777, true);
    $user=$b.'&'.$c."\n";
    $userpath='../users/id'.$a.'/user.txt';
    file_put_contents($userpath, $user);
    $error_count = 6;
    return $error_count;
}

function get_id(&$a) /* $_POST('count') */ 
{
        $id=1;
    while(is_dir('../users/id'.$id))
    {
    $id++;
    }
    return $id;
}

function check_user($a)
{
    $id=1;
    $username=$_POST['username'];
    $password=$_POST['password'];
while(is_dir('../users/id'.$id)){  
    $userpath='../users/id'.$id.'/user.txt';
    $id++;
    $login_pass = file_get_contents(($userpath));
	$sverka = explode('&', $login_pass);
    if($sverka[0]==$username&&$sverka[1]=$password)
    {
		$error_count=5;
	}
}
    return $error_count;
}

function check_login($a)
{
    $id=1;
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username)&&empty($password))
    {
        $error = "Поля не должны быть пустыми";
        return $error;
    }
while(is_dir('./users/id'.$id)){ 
    $userpath='./users/id'.$id.'/user.txt';
    $login_pass = file_get_contents(($userpath));
	$sverka = explode('&', $login_pass);
    if($sverka[0]==$username&&$sverka[1]=$password)
    {
        if(file_exists('./users/id'.$id.'/ban.txt'))
        {
            $error = "Пользователь забанен";
            return  $error;
        }
        else{
		$idArray[]=$id;
        $func = $idArray[0];
        return $func;
    }
	}
    else{
       $id++;
    }
}  
if (!isset($idArray[0]))
{
    $error = "Неправильное имя/Пароль";
    return $error;
}
}
function get_user_data($func){
    $id = $func;
    $files=@scandir("./users/id".$id.'/files');
    print_r($files);
    $user_data = './users/id'.$id.'/user.txt'; 
    $user_info=@file_get_contents($user_data);
    if(empty($files[2])){
       $user_image = '../files/comment.jpg'; 
    }
    else{
    $user_image = '/users/id'.$id.'/files/'.$files[2];
    }
    $user_login =@explode('&',$user_info);
    $_SESSION['username']= $user_login[0];
    $_SESSION['image']= $user_image;
    $_SESSION['id'] = $id;
    return $_SESSION;
}
?>

