<?php
session_start(); 
include "../site/adm_functions.php";
get_all_tables();
?>
<form action="../site/redaktirovanie" method="get">
<span>id страницы</span>
<input type="text" name="page_id" value="<?php $_SESSION['page_id'] ?>">
<input type="hidden" name="admin" value="change_text">
<button type="submit" name="find_page" value='find'>Открыть</button>
</form>
