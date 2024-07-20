<?php 
$host ="localhost";
$db_name = "test2";
$username ="root";
$password = "15975346";
$conn = new PDO("mysql:host=".$host.";dbname=".$db_name,$username,$password);
$query = "SELECT COUNT(*) FROM test";
$stmt = $conn -> prepare($query);
$stmt->execute();
$a = $stmt ->fetch();
print_r($a);

?>