<?php
include "functions.php";
print_r($_POST);
print_r($_FILES);
$filename="../files/temp/images".$_FILES['filename']['name'];
$id=get_id($_POST['count']);
$error_count = err_Pass($_POST);
    if($error_count==0);{
$error_count = file_check($_FILES, $_POST); 
$files=scandir("../files/temp/images");     
    if($error_count==0){
       $hidden = "<input type='hidden' name='to2' value='2'>";
       print_r($_POST);
}
    }
    
    create_user($id,$username,$password);if($error_count==1){
    move_uploaded_file("../files/temp/images/".$files[2],"../users/id".$id."/files/");
    }
echo $id, " ",$username, " ", $password,' '; 
echo "!2", $error_count;
$error= err_Count($error_count);
echo "!3  ",$error;
echo "count = ", $count;
?>
