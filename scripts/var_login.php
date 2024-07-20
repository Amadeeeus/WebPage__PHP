<?php 
session_start();
if(isset($_SESSION['username']))
{
    include "./scripts/logined.php";
}
else
{
    include "./scripts/login_form.php";
}
?>