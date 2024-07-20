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
    <input type="hidden" name="admin" value="ban">
    <input type="text" name="username_find" value="">
    <button type="input" name="search" value="start_search">Найти</button>
</form>
<?php
if(isset($_GET['admin'])=="ban"){
    $check_username = $_GET['username_find'];
    $user_array = verify_user($check_username);
    if(empty($user_array)){
        $error = '<div class="error">
        Пользователь не найден
    </div>';
    }
    else{
    list($id, $username, $password) = $user_array;
    $_SESSION['id_ban']=$id;
    }
    ?>
    <form action="admin_panel" method="get">
        <span>Найден пользователь <?php echo $username?>
        <input type="text" name="ban_username" value="<?php echo $username ?>">
        <input type="hidden" name="admin" value="ban">
        <button type="submit" name="button_ban" value="ban">Забанить</button>
        <button type="submit" name="button_ban" value="unban">Разбанить</button>
    </form> 
    <?php if($_GET['button_ban']=="ban")
    {
        $path="../users/id".$_SESSION['id_ban'].'/ban.txt';
         file_put_contents("../users/id".$_SESSION['id_ban'].'/ban.txt','1');
         $error = '<div class="error">
         Пользователь забанен
     </div>';
    } 
    if($_GET["button_ban"] == "unban")
    {
       unlink('../users/id'.$_SESSION['id_ban'].'/ban.txt');
       $error = '<div class="error">
         Пользователь разбанен
     </div>';
    }
    ?>
    
    <?php
} 
echo $error;

?>