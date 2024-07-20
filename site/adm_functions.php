<?php
session_start();
function get_user_data(){
    session_start();
$id =1;
while(is_dir("../users/id".$id)){
    $user_logpass = file_get_contents("../users/id".$id."/user.txt");
    $user_data = explode("&", $user_logpass);
    list($username_pre, $password_pre) =  $user_data;
    $user_id[$id] = ["$username_pre"=>"$password_pre"];
    $id++;
} 
return $user_id;
} 

function show_user_data($user_id){
    foreach ($user_id as $id => $userdata)
    {
        ?><tr class="admin_tr"></tr>
        <td class="admin_td"><?php if ($id <= 3) 
        {
            echo "admin";
        }
        elseif($id > 3 && $id <=6){
            echo "writter";
        }
        else 
        {
            echo "user";
        }
        ?></td>
        <td class="admin_td"><?php echo $id ?></td>
        <?php
        foreach ($userdata as $username => $password)
        {
            ?><td class="admin_td"><?php echo $username ?></td>
    <td class="admin_td"><?php echo $password ?></td>
<?php
        }
    }
}

function verify_user($a){
    $userdata = get_user_data();
    foreach ($userdata as $id => $user){
         foreach($user as $username =>$password){
            if($username == $a)
            {
                
                $user_array = [$id, $username, $password];
            }
         }
    }
 return $user_array;
}

function edit_user_data($a,$b,$c)
{
    $id = $a;
    $username = $b;
    $password =$c;
    $userpath = '../users/id'.$id.'/user.txt';
    $user = $username."&".$password;
    file_put_contents($userpath,$user);
}

function edit_user(){
    if(isset($_POST['search'])){
        $check_username = $_POST['username_find'];
        print_r($_POST);
        $user_array = verify_user($check_username);
        print_r($user_array);
        if(empty($user_array)&&empty($_POST['check'])){
            $error = '<div class="error">
            Пользователь не найден
        </div>';
        }
        else{
        list($id, $username, $password) = $user_array;
        if($id !=0){
            $_SESSION['user_id']=$id;
            $_SESSION['user_username'] = $username;
            $_SESSION['user_password'] = $password;
        }
        edit_user_data($_SESSION['user_id'], $_POST['username'], $_POST['password']);
}
    }
}

function session_give_id(){
    if(isset($_GET['admin'])=="give_admin"){
        $check_username = $_GET['username_find'];
        $user_array = verify_user($check_username);
        if(empty($user_array)){
            $error = '<div class="error">
            Пользователь не найден
        </div>';
        }
        else{
        list($id, $username, $password) = $user_array;
        $_SESSION['id_ban']=$id;
        }
    }
    return $error;
}

function get_admin_user(){
    $id=1;
   while($id<=3)
   {
    
     if(file_exists("../users/id".$id.'/user.txt'))
     {
        $id++;
     }
     else
     {
       copy('../users/id'.$_SESSION['id_ban'].'/user.txt','../users/id'.$id."/user.txt");
     }
   }
}
function get_writter_user(){
    $id=4;
   while($id<=6)
   {
    
     if(file_exists("../users/id".$id.'/user.txt'))
     {
        $id++;
     }
     else
     {
       copy('../users/id'.$_SESSION['id_ban'].'/user.txt','../users/id'.$id."/user.txt");
     }
   }
}
function delete_from_admins(){
    $id=1;
    while(is_dir("../users/id".$id))
    {
        $id++;
    }
    mkdir("../users/id".$id, 0777, true);
    mkdir("../users/id".$id."/files", 0777, true);
    copy('../users/id'.$_SESSION['id_ban'].'/user.txt','../users/id'.$id."/user.txt");
    $files=@scandir("./users/id".$id.'/files');
    @copy('../users/id'.$_SESSION['id_ban'].'/files/'.$files[2],'../users/id'.$id."/files/".$files[2]);
}

function info_page(){
    $courses = scandir("../files/courses");
    unset($courses[0],$courses[1]);
    foreach ($courses as $course_name){
        $id= 1;
        while(is_dir("../files/courses/".$course_name."/id".$id)){
            $text = file_get_contents("../files/courses/".$course_name."/id".$id."/file.txt");
            $text_array = explode("&", $text);
            $page_info[] =[$id=>[$course_name => $text_array]];
            $id++;
        }
    }
    return $page_info;
}
function show_page($page_info){
    foreach ($page_info as $number => $id_0){
      foreach ($id_0 as $id => $all_array)
      {
        foreach($all_array as $course_name => $text_array)
         list($description, $shortdesc, $code, $image, $other) = $text_array;
         if($id<=1){
            ?>
            <table class=""> 
                <thead>
                <th class=""><?php echo $course_name ?></th> 
                <tr class="">
         <th class="">ID</th>
         <th class="">Описание</th>
         <th class="">Краткое описание</th>
         <th class="">Исходный код</th>
         <th class="">Изображение(ссылка)</th>
         <th class="">Описание</th>
         </tr></thead><?php }?>
         <tbody>
         <tr class="">
            <td class=""><?php echo $id ?></td>
            <td class=""><?php echo $description?></td>
            <td class=""><?php echo $shortdesc?></td>
            <td class=""><?php echo $code?></td>
            <td class=""><?php echo $image?></td>
            <td class=""><?php echo $other?></td>
         </tr>
         </tbody>
<?php
$id_c =1; 
while(is_dir("../files/courses/".$course_name."/id".$id_c))
{
 ++$id_c;
}
if($id==$id_c){
?>
</table>
         <?php
         }
         }
      }
    }

    function get_text_page(){
        $option_value = $_GET['course'];
        $id = $_GET['input_1'];
        switch($option_value)
        {
            case($option_value == "php_basic"): $path ="../files/courses/php_basic/id".$id;break;
            case($option_value == "php_pre"): $path ="../files/courses/php_pre/id".$id;break;
            case($option_value == "sql"): $path ="../files/courses/sql/id".$id;break;
            case($option_value == "framework"): $path ="../files/courses/framework/id".$id;break;
            case($option_value == "html"): $path ="../files/courses/html/id".$id;break;
            case($option_value == "css"): $path ="../files/courses/css/id".$id;break;
        }
    if(is_dir($path))
    {
         $file = file_get_contents($path."/file.txt");
         $file_array = explode('&', $file);
         $_SESSION['page_id'] = $id;
        
    } 
    else
    {
        if($id!=0){
        $file_array = "err";
        }
    } 
    return $file_array;
    } 

    function change_text_page(){
        $id  = $_SESSION['page_id'];
        echo $id;
        $description = $_GET['value1'];
        $shortdesc = $_GET['value2'];
        $code = $_GET['value3'];
        $image = $_GET['img'];
        $course = $_GET['course'];
        $other = $_GET['value4'];
        $path = "../files/courses/".$course."/id".$id."/file.txt";
        $output = $description.'&'.$shortdesc.'&'.$code.'&'.$image.'&'.$other;
        file_put_contents($path, $output);
        if(is_file($path))
        {
            $error= "Успешно";
        }
        else
        {
            $error = "Не получилось(";
        }
    return $error;
    }

    function delete_text_page($id){
        $check = $_GET['input_1'];
        $course = $_GET['course'];
        if($check!=0){
            $path = "../files/courses/".$course."/id".$id."/file.txt";
            unlink($path);
            rmdir("../files/courses/".$course."/id".$id);
        }
        if(is_dir("../files/courses/".$course."/id".$id))
        {
            $error = "Ошибка";
        }
        else{
            $error = "Успешно";
        }
      return $error;
    }

    function file_table(){
$first = file_get_contents("../files/files_server.txt");
$array_1 = explode('*', $first);
foreach ($array_1 as $arr){
$array_2[] = explode('&', $arr);
}
?>
<table class="admin_table">
    <th class="admin_th"></th>
    <th class="admin_th">Имя файла</th>
    <th class="admin_th">Размер</th>
<?php
foreach ($array_2 as $number => $value)
{
 list($filename, $path) = $value;
   ?>
   <tr class="admin_tr">
    <td class="admin_td"><?php echo $number ?></td>
    <td class="admin_td"><?php echo $filename ?></td>
    <td class="admin_td"><?php echo $path ?></td>
 </tr>
   <?php
 }
?>
</table>
<?php
    }
function get_1_table($course){
    $id= 1;
    while(is_dir("../files/courses/".$course."/id".$id)){
        $text = file_get_contents("../files/courses/".$course."/id".$id."/file.txt");
        $text_array = explode("&", $text);
        $full_array[$id] = $text_array;
        $id++;
    }
    return $full_array;
}

function draw_1_table($full_array,$course){
    ?>
  <table class="admin_table"> 
                <thead>
                <th class="admin_th"><?php echo $course?></th> 
                <tr class="admin_tr">
         <th class="admin_th">ID</th>
         <th class="admin_th">Описание</th>
         <th class="admin_th">Краткое описание</th>
         <th class="admin_th">Исходный код</th>
         <th class="admin_th">Изображение(ссылка)</th>
         <th class="admin_th">Описание</th>
         </tr></thead>
         <tbody>
         <?php
         foreach ($full_array as $id => $value)
         {
            list($description, $shortdesc, $code,$image, $other) = $value;
         
            ?>
            <tr class="admin_tr">
            <td class="admin_td"><?php echo $id ?></td>
            <td class="admin_td"><?php echo $description?></td>
            <td class="admin_td"><?php echo $shortdesc?></td>
            <td class="admin_td"><?php echo $code?></td>
            <td class="admin_td"><?php echo $image?></td>
            <td class="admin_td"><?php echo $other?></td>
         </tr>
         <?php
         }
         ?>
         </tbody>
  </table>

<?php
        }


 function get_all_tables()
{
  $categories = scandir("../files/courses");
  unset($categories[0],$categories[1]);
  foreach ($categories as $course)
  {
     $full_array = get_1_table($course);
    draw_1_table($full_array,$course);
  }
       
}
    ?>