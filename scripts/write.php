<?php 
create_user($id,$username,$password);
$files=scandir("../files/temp/images");
print_r($files);
rename("../files/temp/images/".$files[2],"../users/id".$id."/files/".$files[2]);
$img_path="../users/id".$id."/files/".$files[2];
file_put_contents("../files/temp/check.txt","");
unlink("../files/temp/check.txt");
if(is_file("../users/id".$id."/user.txt"))
{
    $error_count=6;
}
$error=err_Count($error_count);
if($error_count==6)
{
    $button = '';
    $button1="<button class='formbutton'><a class='formlink' href='../Index.php'>На главную</a></button>";
}
?>