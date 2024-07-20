<?php 
class Database{
private $host ="localhost";
private $db_name = "mysite_database";
private $username ="root";
private $password = "";
public $conn; 
public function dbConnect()
{
  $this ->conn = null;

  try{
    $this ->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->username,$this->password);  
}
    catch(PDOException $exception){
      echo "Ошибка соединения: ".$exception->getMessage();
    }
}
}
?>