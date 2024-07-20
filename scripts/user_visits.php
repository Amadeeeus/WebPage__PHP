<?php
class User_visits{
    public $visitor_id;
    public $date;
    public $conn;
    public function __construct($db){

        $this->conn = $db;
    }
    public function setVisitor_id($id)
    { 
     $this->visitor_id = $id;
    }

    public function setDate($date)
    {
      $this->date = $date;
    }

    public function getVisitor_id()
    {
        return $this->visitor_id;
    }

    public function getDate()
    {
        return $this->date;
    }
    
  public  function check_visitors($date){
$query = "SELECT visit_id FROM visit_users WHERE date LIKE '%$date%'";
$stmt = $this -> conn->prepare($query);
$stmt ->execute();
$count = $stmt ->fetchColumn();
return $count;
} 

public function add_visitor($count, $date, $visitor_id){
if($count == 0)
{
    $query =  "DELETE FROM user_ip";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    $query = "INSERT INTO user_ip SET ip_address='$visitor_id'";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    $query = "INSERT INTO visit_users SET date=$date, hosts = 1, views= 1";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
}
else
{
    $query =  "SELECT * FROM user_ip WHERE ip_address LIKE '%$visitor_id%'";
    $stmt=$this->conn->prepare($query);
    $stmt->execute();
    $check = $stmt->fetchColumn();
    if($check >0)
    {
        $query = "UPDATE visit_users SET views = views + 1, date = $date";
        $stmt= $this->conn->prepare($query);
        $stmt->execute();
    }
    else
    {
    $query ="INSERT INTO user_ip SET ip_address = '$visitor_id'";
    $stmt= $this->conn->prepare($query);
    $stmt->execute();

    $query = "UPDATE visit_users SET hosts = hosts + 1, views = views + 1 WHERE date = $date";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    }
}
}

public function give_count($date){
    $query = "SELECT views, hosts FROM visit_users WHERE date = $date";
    $stmt = $this->conn->prepare($query);
    $stmt ->execute();
    $count = $stmt ->fetchAll(PDO::FETCH_ASSOC);
    return $count;
}
}
?>