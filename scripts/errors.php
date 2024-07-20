<?php
$id=get_id($_POST['count']);
$error_count = err_Pass($_POST);
    if($error_count==0){
$error_count = file_check($_FILES, $_POST); 
if($error_count==0)
{
    $error_count = check_user($_POST);
}     
    if($error_count==0){
        $content = "1 \n";
        file_put_contents('../files/temp/check.txt',"$content", FILE_APPEND);
}
    } 
    $files=scandir("../files/temp/images");
    $img_path="../files/temp/images/".$files[2];
    echo $error_count;
    $error=err_Count($error_count);
    echo $error;
?>
