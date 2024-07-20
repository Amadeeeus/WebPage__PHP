<?php
include_once "./site/db.php";
include_once "./site/classes.php";

$database = new Database();
$db = $database ->dbConnect();
$user = new login_User($db);
?>
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

</form>
<?php

?>