<?php
session_start(); 
include "../site/adm_functions.php";
$array = info_page();
show_page($array);

?>
<form action="../scripts/admin_panel" method="get">
    <input type="hidden" name="admin" value="change_text">
    <select name="course">
    <option name="course_id" value="php_basic" default>Базовый уровень PHP</option>
    <option name="course_id" value="php_pre">Продвинутый уровень PHP</option>
    <option name="course_id" value="sql">SQL</option>
    <option name="course_id" value="framework">Фреймворки</option>
    <option name="course_id" value="html">HTML</option>
    <option name="course_id" value="css">CSS</option>
    </select>
    <span>Выберите id нужной статьи</span>
    <input type="text" name="input_1" value="<?php echo $id;?>">
    <button type="submit" name="id" value="check_id">Изменить</button>
</form>
   <?php 
   $id = $_GET['input_1'];
    if($id != 0){
    $_SESSION['id'] = $_GET['input_1'];
}
   if(isset($_GET['admin'])){
    
    $file_array = get_text_page();
    if($file_array == "err")
    {
      echo "Такого ID нет";
    }
    list($description, $shortdesc, $code, $image, $other) = $file_array;
    $id = $_SESSION['id']; 
        $notice = change_text_page($id, $description, $shortdesc, $code, $image, $other);
        ?>
        
        <span><?php echo $notice; ?></span>
        <?php
   ?>
   <div class="description" ></div>
   <form action="../scripts/admin_panel" method="get" enctype="multipart/form-data">
       <div class="description2">Заголовок</div>
       <input type="text" name="value1" value="<?php echo $description?>">
       <div class="description2">Краткое описание</div>
       <input type="text" name="value2"value="<?php echo $shortdesc?>">
       <div class="description2">Исходный код</div>
       <input type="text" name="value3" value="<?php echo $code?>">
       <div class="description2">Изображение (ссылка)</div>
       <input type="text" name="img" value="<?php echo $image ?>">
       <input type="hidden" name="admin" value="change_text">
       <div class="description2">Выберите курс</div>
       <select name="course">
       <option name="course_id" value="php_basic" default>Базовый уровень PHP</option>
       <option name="course_id" value="php_pre">Продвинутый уровень PHP</option>
       <option name="course_id" value="sql">SQL</option>
       <option name="course_id" value="framework">Фреймворки</option>
       <option name="course_id" value="html">HTML</option>
       <option name="course_id" value="css">CSS</option>
   </select>
   <div class="description2">Описание</div>
   <input type="hidden" name="call" value="1">
       <input type="text" name="value4" value="<?php echo $other ?>">
       <button type="input" name="search" value="start_search">Удалить</button>
   </form>
   <?php
   
   }
 ?>