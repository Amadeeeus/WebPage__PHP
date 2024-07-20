
<?php session_start();
$image_profile = $_SESSION['image'];
      $name_profile=$_SESSION['username'];
      $role = $_SESSION['role'];
      echo $role;
      switch($role){
      case $role=='admin': $admin = '<a class="textmenu" href="/scripts/admin_panel.php">Администрирование</a>'; break;
      case $role=='writter': $admin = '<a class="textmenu" href="/scripts/admin_panel.php">Редактура</a>'; break;
      }
      ?>
    <table class="background_logined">
      <tr><td class="trlogin1"><img class="userpic" src="<?php echo $image_profile?>"></img></td>
      <td class="trlogin2"><a class="profile_link" href="/scripts/profile.php"><?php echo $name_profile ?></a></td>
      <td class="trlogin2"><div class="dropdown" tabindex="-1">
    <button class="dropbtn"><img class="img" src="../files/menu_ico.jpg"></button>
    <div class="dropdown-content">
        <a class="textmenu" href="">Профиль</a>
        <a class="textmenu" href="">Личные сообщения</a>
        <a class="textmenu" href="">Чек - Лист</a>
        <?php 
        echo $admin;
        ?>
        <a class="textmenu" href="">Выйти</a>
    </div>
  </div></td class="trlogin1">
      <td class="trlogin1"><a class="logout_link" href="/scripts/logout.php">Выйти</a></td></tr>
    </table>
