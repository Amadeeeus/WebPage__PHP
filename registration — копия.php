<?php
 session_start();
 include_once "./site/db.php";
 include_once "./site/header.php";
 include_once "./site/body_start.php";
 include_once "./site/sidebar.php";
include_once "./site/main_page.php";
include_once "./site/create_user.php";

$database = new Database();
$db = $database -> dbConnect();
echo $db;
print_r($_POST);
if(empty($_POST))
{
    $reg_submit = "Проверить";
}
 else {
    $reg_submit = "Зарегистрироваться";
 }
 if($_POST){
    $add_1 = new add_User($db);
    $add -> add_1 ->create_user($_POST);
 }
?>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <tr>
    <td><span>Ник</span></td>
<td><input type="text" name="nickname" value="<?php echo $_POST['nickname'] ?>"></td>
</tr>
<tr>
<td><span>Имя</span></td>
<td><input type="text" name="name" value="<?php echo $_POST['name'] ?>"></td>
</tr>
<tr>
<td><span>Фамилия</span></td>
<td><input type="text" name="forname" value="<?php echo $_POST['forname'] ?>"></td>
</tr>
<tr>
<td><span>Email</span></td>
<td><input type="text" name="email" value="<?php echo $_POST['email'] ?>"></td>
</tr>
<tr>
<td><span>Пароль</span></td>
<td><input type="text" name="password" value="<?php echo $_POST['password'] ?>"></td>
</tr>
<tr>
<td><span>Фото</span></td>
<td><input type="text" name="photo" value="<?php echo $_POST['photo'] ?>"></td>
</tr>
<tr>
<td><input type="text" name="adress" value="<?php echo $_POST['adress'] ?>"></td>
</tr>
<tr>
<td><button type="submit" name="reg_submit" value="submit"><?php echo $reg_submit ?></button></td>
</tr>
</form>
<?php

include_once "./site/body_end.php";
?>
