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