
<?php 
session_start();
include_once "./site/db.php";
include_once "./site/classes.php";

if(isset($_POST)){
$database = new Database();
$db= $database->dbConnect();
$login_user = new login_User($db);
$error = $login_user->login_user();
if(!empty($error))
{
    echo $error;
   
}
 //header("location: ../index.php");
}
?> 
    <table class="loginform1">
  <form class="form_login" action="/index" method="post"> 
    <tbody class="login_tbody"> 
<tr class="form_login">
    <td class="login_cell"><span class="login_text">Имя пользователя</span></td>
<td class="login_cell"><input class="login_input" type="text" name="username" value=""></td>
</tr>
<tr>
    <td class="login_cell"><span class="login_text">Пароль</span></td>
<td class="login_cell"><input class="login_input" type="text" name="password" value=""></td>
</tr>
<tr>
    <td class="login_cell"><button class="buttonlogin" name="login" type="submit" value="login">Вход</button></td>
<td class="login_cell"><button class="buttonlogin"><a class="login_reg" href="../registration.php">Регистрация</a></button></td>
</tr>
<tr>
    <td class="login_error"><?php echo $error ?></td>
<td class="login_cell"><a class="login_forgot" href="">Забыли пароль?</a></td>
</tr>
    </tbody>
  </form>
</table>

    

