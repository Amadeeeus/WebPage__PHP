<?php
session_start(); 
include "../site/adm_functions.php";
$user_id = get_user_data();
?>
<table class="admin_table">
    <th class="admin_th">Тип</th>
    <th class="admin_th">id пользователя</th>
    <th class="admin_th">Логин</th>
    <th class="admin_th">Пароль</th>
    <?php 
    show_user_data($user_id);
    ?>
    </table>
<form action="../scripts/admin_panel" method="post">
    <input type="hidden" name="admin" value="change">
    <input type="text" name="username_find" value="">
    <button type="input" name="search" value="start_search">Найти</button>
</form>
<?php

if(isset($_POST['search'])){
    $check_username = $_POST['username_find'];
    print_r($_POST);
    $user_array = verify_user($check_username);
    print_r($user_array);
    if(empty($user_array)&&empty($_POST['check'])){
        $error = '<div class="error">
        Пользователь не найден
    </div>';
    }
    else{
    list($id, $username, $password) = $user_array;
    if($id !=0){
        $_SESSION['user_id']=$id;
        $_SESSION['user_username'] = $username;
        $_SESSION['user_password'] = $password;
    }
    edit_user_data($_SESSION['user_id'], $_POST['username'], $_POST['password']);
    ?><form action="admin_panel" method="post">
<table>
 <th>Найден пользователь: <?php echo $username ?> </th>
 <tr>
 <td><span>id</span></td>
 <td><input type="text" name="id" value="<?php echo $id ?>" readonly></td>
</tr>
 <tr>
 <td><span>Логин</span></td>
 <td><input type="text" name="username" value="<?php echo $username ?>"></td>
</tr>
 <tr>
 <td><span>Пароль</span></td>
 <td><input type="text" name="password" value="<?php  echo $password ?>"></td>
 <input type="hidden" name="id" value="<?php $id ?>">
 <input type="hidden" name="check" value="change">
 <input type="hidden" name="admin" value="change">
</tr>
<tr>
    <td>
    <button type="submit" name="search" value="change">Изменить</button>
    </td>
</tr>
</table>
</form><?php
}
if(isset($_POST['check']))
{
    $error ='<div class="error">
        Пользователь изменен;
    </div>';
}
}
echo $error;
   ?>
