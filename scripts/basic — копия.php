
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задания</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="./styles/favicon.ico">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/buttons.css">
    <link rel="stylesheet" href="./styles/card.css">
    <?php
    include "./scripts/implode.php";
    ?>
</head>
<body>
        <div class="all">
        <nav class="cont">
    <ul class="hr"><li><a class="text" href="./Index.html">Главная</a></li>
    <li><a class="text" href="./Projects.html">Проекты</a></li>
    <li><a class="text" href="./learn.html">Уроки</a></li></ul>
</nav>
        </div>
        <div class="main">
<div class="bottom">
    Здесь должен быть мой календарь и часы, может еще что то вроде колонки обновлений сайта, но будет реализовано позже, сейчас другие задачи в приоритете
</div>
<div class="backgr1">
    <div class="head1"><div class="welcome1">Добро пожаловать!<br>Здесь будут публиковаться те задания, что я прошел, обучаясь нижеперечисленным языкам
    Для просмотра заданий по теме нажмите на кнопку на карточке курса</div>
</div>       
<div class="card1"><div class="annot">Базовый курс PHP</div><div class="info">Основы PHP, процедурная разработка, немного ООП</div>
<button class="more1"><a class="text2" href="./PHP1.html">Перейти</a></button>
</div>
<?php
for($i=0;$i<=$id;$i++){
    echo '<div class="card1"><div class="annot">',$id.".".$title.'</div><div class="info">'.$info.'</div>
    <button class="more1"><a class="text2" href="./PHP1.html">Перейти</a></button>
    </div>';
}
?>   
</div>
        </div>
</body>
</html>