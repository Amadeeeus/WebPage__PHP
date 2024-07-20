<?php
 session_start();
 include_once "./site/db.php";
 include_once "./view/header.php";
 include_once "./view/body_start.php";
 include_once "./view/sidebar.php";
include_once "./view/main_page.php";
include_once "./site/classes.php";
include_once './site/site_functions.php';


$database = new Database();
$db = $database -> dbConnect();
$add = new User($db);
$array = $add->check_user();
$id = $add ->give_id();
print_r($array);
if(empty($_POST))
{
    $reg_submit = "Проверить";
}
 else {
    $reg_submit = "Зарегистрироваться";
 }
 if($_POST['reg_submit']=="submit"){
 if($_POST['password']!=$_POST['confirm_password'])
{
    $error_final = "Пароли не совпадают";
}
else{
    $enc = html_encode($_POST);
    $add->nickname = $enc[0];
    $add->email = $enc[1];
    $add->password_user = $enc[2];
        $error = $add ->check_user();
        if(empty($error))
        {
      $add->create_user($id);
    }
    else{
        $error_final = $error;
    }

}
}
?>
<form class="reg_form" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
<table class="reg_table">
    <tr class="reg_tr_top">
    <td class="reg_td_bottomleft"><span class="reg_text">Логин</span></td>
<td class="reg_td_bottomright"><input class="reg_text_input" type="text" name="nickname" value="<?php echo $_POST['nickname'] ?>"></td>
</tr>
<tr class="reg_tr">
<td class="reg_td_left"><span class="reg_text">Email</span></td>
<td class="reg_td_right"><input class="reg_text_input" class="reg_text_input" type="text" name="email" value="<?php echo $_POST['email'] ?>"></td>
</tr>
<tr class="reg_tr">
<td class="reg_td_left"><span class="reg_text">Пароль</span></td>
<td class="reg_td_right"><input class="reg_text_input" type="text" name="password" value="<?php echo $_POST['password'] ?>"></td>
</tr>
<tr class="reg_tr">
<td class="reg_td_left"><span class="reg_text">Подтверждение пароля</span></td>
<td class="reg_td_right"><input class="reg_text_input" type="text" name="confirm_password" value="<?php echo $_POST['confirm_password'] ?>"></td>
</tr>
<tr class="reg_tr_bottom">
<td class="reg_td_topleft"><button class="reg_button" type="submit" name="reg_submit" value="submit"><?php echo $reg_submit ?></button></td>
<td class="reg_td_topright"><span class="reg_text_error"><?php echo $error_final ?></span></button></td>
</tr>
</table>
</form>
<?php

include_once "./view/body_end.php";
?>
