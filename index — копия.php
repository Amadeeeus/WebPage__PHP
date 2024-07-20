<!-- Header.php --><?php session_start(); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="./styles/favicon.ico">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/buttons.css">
    <link rel="stylesheet" href="./styles/login.css">
</head>
<body><!-- Menu1.php -->
    <div class="all"><div class="cont">
    <ul class="hr"><li class="listyle"><a class="text" href="./Index.html">Главная</a></li>
    <li class="listyle"><a class="text" href="./scripts/Projects.php">Проекты</a></li>
    <li class="listyle"><a class="text" href="./scripts/learn.php">Уроки</a></li>
</ul>
</div>

<?php
include "./scripts/var_login.php";
?>

</body>
</html>