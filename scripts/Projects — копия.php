<?php session_start() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проекты</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="./styles/favicon.ico">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/buttons.css">
    <link rel="stylesheet" href="../styles/card.css">
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="../styles/submenu.css">
    <link rel="stylesheet" href="../styles/profile_bar.css">
    <link rel="stylesheet" href="../styles/registration.css">

</head>
<body>
        <div class="all">
        <nav class="cont">
    <ul class="hr"><li><a class="text" href="../Index.html">Главная</a></li>
    <li><a class="text" href="../scripts/Projects.php">Проекты</a></li>
    <li><a class="text" href="../scripts/learn.php">Уроки</a></li></ul>
</nav>
<?php include "../scripts/var_login_other.php" ?>
</div>

<div class="main">
<div class="bottom">
Здесь должен быть мой календарь и часы, может еще что то вроде колонки обновлений сайта, но будет реализовано позже, сейчас другие задачи в приоритете
</div>
<div class="backgr1">
    <div class="head1"><div class="welcome1">Добро пожаловать!<br>Здесь будут публиковаться мои проекты, в порядке их публикации
    Для просмотра заданий по теме нажмите на кнопку на карточке курса</div>
</div>       
<div class="card"><div class="annot">Калькулятор PHP</div><div class="info">Простейший калькулятор написанный на PHP</div>
<button class="more1"><a class="text2" href="../scripts/calc.php">Перейти</button>
</div>   
    <div class="card"><div class="annot">Калькулятор PHP+JS</div><div class="info">Тоже калькулятор, но с новыми функциями, и переписанный для реализации клавиш на странице</div>
    <button class="more1"><a class="text2"  href="../scripts/calc1.php">Перейти</button>
    </div>
</div>
   </div>

</body>
</html>