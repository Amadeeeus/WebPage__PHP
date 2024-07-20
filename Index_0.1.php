<!-- Header.php -->
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
<div class="loginform1">
    <?php
    /* Подключаемый файл login.php*/
    $count = $_POST['count']; 
    if(empty($count))
    {
     $button1="<form class='buttonlogin1' action='../index.php' method='POST'>
     <imput class='buttonlogin1' type='submit' name='count' value='1'>Войти</button>
 </form>";
     $button2="'<form class='buttonlogin1' action='./scripts/registration.php' method='post'>
     <button class='buttonlogin1' type='submit' name='button' value='Зарегестрироваться'>Зарегестрироваться</button>
    </form>";
    }
    else{
        include './scripts/login.php';
        unset($button2);
    }
    echo $count, $button1, $button2;
    ?>
</div>
<!--<div class="loginform1">
    <button class="buttonlogin1" type="submit" value="1"><a href="./scripts/login.php"></a>Войти</button>
    <button class="buttonlogin1"><a class="link1" href="./scripts/registration.php">Зарегестрироваться</a></button>
    </div>
   </div>-->

</body>
</html>