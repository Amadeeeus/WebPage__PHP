<?php
session_start(); 
include "../site/adm_functions.php";
get_all_tables();
    if(isset($_GET['count'])){
    $id = 1;
	$header1=$_GET['value1'];
    $shortdescription= $_GET['value2'];
	$code=$_GET['value3'];
	$img=$_GET['img'];
	$description=$_GET['value4'];
    $course=$_GET['course'];
    $course_2= $_GET['course'];
	$output = $header1."&".$shortdescription."&".$code."&".$img."&".$description;
    $dir_path = "../files/courses/".$course_2."/id".$id;
    while(is_dir("../files/courses/".$course_2."/id".$id))
    {
        $id++;
    }
    mkdir("../files/courses/".$course_2."/id".$id, 0777, true);
    file_put_contents("../files/courses/".$course_2."/id".$id."/file.txt",$output);
    file_put_contents("../files/courses/".$course_2."/id".$id."/desc.txt",$header1."&".$shortdescription);
}
	?>
<div>
<form class="" action="../scripts/admin_panel" method="get" enctype="multipart/form-data">
	<input type="text" name="value1">
    <input type="text" name="value2">
	<input type="text" name="value3" value="">
    <input type="text" name="img" value="">
    <input type="hidden" name="count" value="1">
    <input type="hidden" name="admin" value="create_text">
    <select name="course">
    <option name="course_id" value="php_basic" default>Базовый уровень PHP</option>
    <option name="course_id" value="php_pre">Продвинутый уровень PHP</option>
    <option name="course_id" value="sql">SQL</option>
    <option name="course_id" value="framework">Фреймворки</option>
    <option name="course_id" value="html">HTML</option>
    <option name="course_id" value="css">CSS</option>
</select>
	<input type="text" name="value4" value="Описание">
	<button type="input" name="search" value="start_search">Найти</button>
</form>
</div>