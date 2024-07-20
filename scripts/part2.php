<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ТЕСТ</title>
</head>
<body>
	<div class="description" ></div>
<form action="part1.php" method="GET" enctype="multipart/form-data">
	<div class="description2">Заголовок</div>
	<input type="text" name="value1">
	<div class="description2">Краткое описание</div>
    <input type="text" name="value2">
    <div class="description2">Исходный код</div>
	<input type="text" name="value3" value="">
	<div class="description2">Изображение (ссылка)</div>
    <input type="text" name="img" value="">
    <div class="description2">Выберите курс</div>
    <select name="course">
    <option name="php_basic" value="php_basic">Базовый уровень PHP</option>
    <option name="php_pre" value="php_pre">Продвинутый уровень PHP</option>
    <option name="sql" value="sql">SQL</option>
    <option name="framework" value="framework">Фреймворки</option>
    <option name="html" value="html">HTML</option>
    <option name="css" value="css">CSS</option>
</select>
<div class="description2">Описание</div>
<input type="hidden" name="id" value="1">
	<input type="text" name="value4" value="Описание">
	<input type="submit" name="submit" value="Отправить">
	<?php
    print_r($_GET);
	$header1=$_GET['value1'];
    $shortdescription= $_GET['value2'];
	$code=$_GET['value3'];
	$img=$_GET['img'];
	$description=$_GET['value4'];
    $course=$_GET['course'];
	$output = $header1."&".$shortdescription."&".$code."&".$img."&".$description."\n";
    switch($course){
        case($course="php_basic"):file_put_contents('../files/php_basic.txt',$output,FILE_APPEND);break;
        case($course="php_pre"):file_put_contents('../files/php_pre.txt',$output,FILE_APPEND);break;
        case($course="sql"):file_put_contents('../files/sql.txt',$output,FILE_APPEND);break;
        case($course="framework"):file_put_contents('../files/framework.txt',$output,FILE_APPEND);break;
        case($course="html"):file_put_contents('../files/html.txt',$output,FILE_APPEND);break;
        case($course="css"):file_put_contents('../files/css.txt',$output,FILE_APPEND);break;
    }
    file_put_contents('../files/other.txt',$output,FILE_APPEND);



	?>
</form>
</body>
</html>