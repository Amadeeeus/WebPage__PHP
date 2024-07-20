<?php session_start();
include "../site/header_other.php";
include "../scripts/gettext.php";
?>
    <div class="main">
        <div class="bottom">
            Здесь должен быть мой календарь и часы, может еще что то вроде колонки обновлений сайта, но будет реализовано позже, сейчас другие задачи в приоритете
        </div>
        <div class="backgr1">
            <div class="head1">
                <div class="welcome1">Добро пожаловать!<br>Здесь будут публиковаться те задания, что я прошел, обучаясь нижеперечисленным языкам
                    Для просмотра заданий по теме нажмите на кнопку на карточке курса</div>
</div>
            <div class="cont3">
            <?php
            $number=$_GET['page']; 
            echo explodeText($id,$number);
            ?>
            </div>
        
            <div>
            <form action="basic.php" method="GET">
                <input type="submit" name="page" value="1">
                <input type="submit" name="page" value="2">
                <input type="submit" name="page" value="3">
                <input type="submit" name="page" value="4">
                <input type="submit" name="page" value="5">
                <input type="submit" name="page" value="6">
                <input type="submit" name="page" value="7">
                <input type="submit" name="page" value="8">
                <input type="submit" name="page" value="9">
                <input type="submit" name="page" value="10">
                <input type="submit" name="page" value="11">
            </form>
</div>
        </div>
    </div>
</body>

</html>