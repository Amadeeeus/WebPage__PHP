<?php 
session_start();
include "../site/adm_functions.php";
file_table();
?>

<form action="../scripts/admin_panel" method="post" enctype="multipart/form-data">
<input type="file" name="filename">
<input type="hidden" name="admin" value="upload_file"> 
<input type="submit" name="submit" value="Отправить">
<!--<button type="submit" name="file_submit" value="upload">Загрузить</button>-->
</form>
<?php 
if(isset($_FILES)){
$size = $_FILES['filename']['size'];
$name = $_FILES['filename']['name'];
$old_path = $_FILES['filename']['tmp_name'];
$new_path ="../files/server/".$_FILES['filename']['name']; 
$file_info = $name."&".$size;
if($_FILES['filename']['size'] > 10485760)
{
exit("Файл не должен быть больше 10МБ");
}
else{
    if(file_exists($new_path))
    {
        exit("такой файл уже существует");
    }
    else{
move_uploaded_file($old_path,$new_path);
file_put_contents("../files/files_server.txt", $file_info."*", FILE_APPEND);
echo "Файл загружен";
}
}
}
?>