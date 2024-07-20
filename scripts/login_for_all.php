<?php
$count= $_POST['count']; 
echo $count;
if(empty($count)){
    include "loginform.php";
}
elseif($count == 1){
    include "./scripts/login.php";
}
else{
    include "./login.php";
}



?>