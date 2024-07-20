
<?php
session_start();
include "../site/header_other.php";
if($_SESSION['id']<=3){
    $buttons = '<form class="admin_buttons" action="admin_panel" method="get">
    <ul class="ul_buttons">
    <li class="li_buttons"><button class="button_click" type="submit" name="admin" value="user_list">Список пользователей</button></li>
<li class="li_buttons"><button class="button_click" type="submit" name="admin" value="change">Изменить пользователя</button></li>
<li class="li_buttons"><button class="button_click" type="submit" name="admin" value="ban">Забанить пользователя</button></li>
<li class="li_buttons"><button class="button_click" type="submit" name="admin" value="create_adm">Создать админа/редактора</button></li>
<li class="li_buttons"><button class="button_click" type="submit" name="admin" value="create_text">Создать статью</button></li>
<li class="li_buttons"><button class="button_click" type="submit" name="admin" value="change_text">Изменить статью</button></li>
<li class="li_buttons"><button class="button_click" type="submit" name="admin" value="delete_text">Удалить статью</button></li>
<li class="li_buttons"><button class="button_click" type="submit" name="admin" value="upload_file">Загрузить файл на сервер</button></li>
</ul>
</form>';
      } 
      elseif($_SESSION['id']>3&&$_SESSION["id"]<=6)
      {
        $buttons = '<form class="admin_buttons" action="admin_panel" method="get">
        <ul class="ul_buttons">
    <li class="li_buttons"><button class="button_click" type="submit" name="admin" value="create_text">Создать статью</button></li>
    <li class="li_buttons"><button class="button_click" type="submit" name="admin" value="change_text">Изменить статью</button></li>
</ul>
</form>';
      }
?>
<div class="admin_page">
    <?php
echo $buttons;
        ?>
<div class="admin_result">
<?php
if(isset($_POST['admin'])){
$page = $_POST['admin'];
}
else{
    $page = $_GET['admin'];
}
switch($page)
{
    case('user_list'):include "../site/userlist.php";break;
    case ("change"):include "../site/changeuser.php";break;
    case ("ban"):include "../site/ban.php";break;
    case ('create_adm'):include "../site/give_admin.php";break;
    case ('create_text'):include "../scripts/part1.php";break;
    case ('change_text'):include "../site/change_page.php";break;
    case ('delete_text'):include "../site/delete_page.php";break;
    case ('upload_file'):include "../site/upload_file.php";break;
}
?>
</div>
</div>
</body>
</html>