<?php session_start();
include "../site/header_other.php";
?>
        <div class="main">
<div class="bottom">
    Здесь должен быть мой календарь и часы, может еще что то вроде колонки обновлений сайта, но будет реализовано позже, сейчас другие задачи в приоритете
</div>
<div class="backgr1">
    <div class="head1"><div class="welcome1">Добро пожаловать!<br>Здесь будут публиковаться те задания, что я прошел, обучаясь нижеперечисленным языкам
    Для просмотра заданий по теме нажмите на кнопку на карточке курса</div>
</div>    
  
<div class="card"><div class="annot">Базовый курс PHP</div><div class="info">Основы PHP, процедурная разработка, немного ООП</div>
<form class="form3" action="../scripts/basic.php" method="get">
<input type="hidden" name="id" value="1">
<input type="hidden" name="page" value="1">
<input type="submit" class="more1" value="Перейти">
</form>  </div>  
    <div class="card"><div class="annot">Продвинутый курс PHP</div><div class="info">Информация</div>
    <form class="form3" action="../scripts/basic.php" method="get">
    <input type="hidden" name="page" value="1">
    <input type="hidden" name="id" value="2">
    <input type="hidden" name="page" value="1">
    <input type="submit" class="more1" value="Перейти">
    </form>
</div>
    <div class="card"><div class="annot">MySQL</div><div class="info">Информация</div>
    <div class="form3">
    <form class="form3" action="../scripts/basic.php" method="get">
    <input type="hidden" name="id" value="3">
    <input type="submit" class="more1" value="Перейти">
    </form></div>
</div>   
    <div class="card"><div class="annot">Фреймворки</div><div class="info">Информация</div>
    <form class="form3" action="../scripts/basic.php" method="get">
    <input type="hidden" name="id" value="4">
    <input type="hidden" name="page" value="1">
    <input type="submit" class="more1" value="Перейти">
    </form>
    </div>
    <div class="card"><div class="annot">HTML</div><div class="info">Информация</div>
    <form class="form3" action="../scripts/basic.php" method="get">
    <input type="hidden" name="id" value="5">
    <input type="hidden" name="page" value="1">
    <input type="submit" class="more1" value="Перейти">
    </form>
</div>   
    <div class="card"><div class="annot">CSS</div><div class="info">Информация</div>
    <form class="form3" action="../scripts/basic.php" method="get">
    <input type="hidden" name="id" value="6">
    <input type="hidden" name="page" value="1">
    <input type="submit" class="more1" value="Перейти">
</form>
    </div>
</div>
        </div>
</body>
</html>