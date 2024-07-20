<?php 
class add_User{
private $nickname, $name_user, $forname, $email, $password_user, $photo, $adress, $conn, $timeadd;
public function __construct($db)
{
    
    $this->conn= $db;
    print_r($db);
}
public function create_user(){
    $this->nickname = $_POST['nickname'];
    $this->name_user = $_POST['name'];
    $this->forname = $_POST['forname'];
    $this->email = $_POST['email'];
    $this->password_user = $_POST['password'];
    $this->photo = $_POST['photo'];
    $this->adress = $_POST['adress'];

$query = "INSERT INTO users SET niсkname=:nickname, name=:name_user, forname=:forname, email:=email, password:=password_user, photo=:photo, adress:=adress, created:=timeadd";
$sql = $this->conn->prepare($query);
    $this->nickname = htmlspecialchars(strip_tags($this->nickname));
    $this->name_user = htmlspecialchars(strip_tags($this->name_user));
    $this->forname = htmlspecialchars(strip_tags($this->forname));
    $this->email = htmlspecialchars(strip_tags($this->email));
    $this->password_user = htmlspecialchars(strip_tags($this->password_user));
    $this->photo = htmlspecialchars(strip_tags($this->photo));
    $this->adress = htmlspecialchars(strip_tags($this->adress));
    $this->timeadd = date("Y-m-d H:i:s");

$sql->bindParam(":nickname", $this->nickname);
$sql->bindParam(":name_user", $this->name_user);
$sql->bindParam(":forname", $this->forname);
$sql->bindParam(":email", $this->email);
$sql->bindParam(":password_user", $this->password_user);
$sql->bindParams(":photo", $this->photo);
$sql->bindParams(":adress", $this->adress);

$sql->execute();
}
}
?>