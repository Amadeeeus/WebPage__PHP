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
<form action="../scripts/admin_panel" method="get">
    <input type="hidden" name="admin" value="create_adm">
    <input type="text" name="username_find" value="">
    <button type="input" name="search" value="start_search">Найти</button>
</form>
<?php
session_give_id();
if($_GET["admin"]=="create_adm"){
if($_SESSION['id_ban']<=3)
{
    $error = "Пользователь уже является администратором";
}
elseif($_SESSION['id_ban']>3 && $_SESSION['id_ban'] <=6)
{
     $error = "Пользователь уже является редактором"; 
}
else{
    if($_GET['give']=='admin'){
        get_admin_user();
    }
    elseif($_GET['give'] == 'writter')
    {
        get_writter_user();
    }
}
if($_GET['give'] == 'delete')
{
 delete_from_admins();
}
?>
<form action="admin_panel" method="$_GET">
    <table>
        <span><?php echo "найден пользователь". $_GET['username_find']?></span>
    <tr>
    <td><button class="give_adm" type="submit" name="give" value="admin">Дать администратора</button></td>
    <td><button class="give_adm" type="submit" name="give" value="writter">Дать редактора</button></td>
    </tr>
    <tr>
    <td><button class="give_adm" type="submit" name="give" value="delete">Забрать администратора/редактора</button></td>
    <input type="hidden" name="admin" value="give_admin">
    </tr>
</table>
</form>
<?php
echo $error;
}
?>