<?php


function get_Number_page(){
  if(isset($_GET['page']))
  {
    $page = $_GET['page'];
    
  }
  if($page<1){
    $page = 1;
  }
}


function themes_Count(){
  $id =1;
  $theme_count =1;
  $theme = $_GET['course'];
  $course_path = "../files/courses/".$theme.'/id'.$id;
  while(is_dir($course_path))
  {
    
    $theme_count += 1;
    $id++;
  }
  return $theme_count;
}


function text_Pages($theme_count){
  //10 число статей на странице
$text_pages =  ceil($theme_count/10);
return $text_pages;
}

//генерация кнопок
function generate_Submits($text_pages)
{
  $page_id= 1;
?>

<form action="/scripts/learn" method="get">
  <?php
  for($i=1; $i <= $text_pages;$i++)
  {
    
    ?>
    <input type="submit" name="section_page" value="<?php echo $page_id?>">
    <?php 
    $page_id++;
  }
  ?>
</form>
<?php
return $page_id;
}

function get_Pages(){
  $course = $_SESSION['course'];
  $count =1;
  $page = $_GET['page_id'];
  $page = $page - 1;
  $page_id = $page.$count;
  for($i=$page_id; $i <=9; $i++)
  {
    $id= $i;
    $string=file_get_contents("../files/courses/".$course."/id".$id."/desc.txt");
    $array = explode("$",$string);
    list($description, $shortdesc) = $array;
    ?>
    <form class="card1" action="../scripts/page" method="get">
    <div class="annot"><?php $description ?></div>
    <div class="info"><?php $shortdesc ?></div>
    <button class="more1" type="submit" name="annot" value="<?php $i ?>">Перейти</button>
  </form>
    <?php

  }
}
?>