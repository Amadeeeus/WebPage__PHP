<?php 
class User{
protected $conn;
protected $nickname;
protected $email; 
protected $password_user; 
public function __construct($db)
{
    $this->conn= $db;
}


public function give_id()
{
$query = "SELECT COUNT(*) FROM users";
$stmt = $this->conn -> prepare($query);
$stmt->execute();
$a = $stmt ->fetch();
$id = $a[0];
if(empty($id)){
    $id = 1;
}
else{
    $id++;
}
return $id;
}

function check_user(){
    $query = "SELECT nickname, email FROM users";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    $array  = $stmt ->fetchAll(PDO::FETCH_ASSOC);
    foreach($array as $key =>$user){
        for($i=1; $i<=$key; $i++){
            if($this ->nickname == $user['nickname'])
            $error = "Логин уже занят";
            else
            {
                if($this->email ==$user['email'])
                $error = "Почта уже занята";
            }
        }

    }
    return $error;
}
function create_user($id){
$query = "INSERT INTO users SET id=:id,nickname=:nickname, email=:email, password_user=:password_user";
$stmt = $this->conn->prepare($query);
$stmt->bindParam(':nickname', $this->nickname);
$stmt->bindParam(':email', $this->email);
$stmt->bindParam(':password_user', $this->password_user);
$stmt->bindParam(':id',$id);
$stmt->execute();
}
}


class login_User extends User{


    public function db_all_users()
    {
      $query = "SELECT nickname, password_user, role_id, banned  FROM users";
      $stmt = $this->conn->prepare($query);
      $stmt->execute();
      $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $array;
    }
    

    public function login_verify()
    {
        $login = $_POST['username'];
        $user = $this->db_all_users();
        foreach($user as $id=>$array)
        {
        if($array['nickname'] == $login)
        {
               $id= array('id'=>$id);
               $check = array_merge($array,$id);     
        }
    }

        return $check; 
    }

   
    public function pass_verify()
    {
      $update = $this->login_verify();
      echo '<pre>';
        print_r($update);
        echo '</pre>';
      if(is_array($update)){
      $old_password = $update['password_user'];
      $check_pass = $_POST['password'];
      if(password_verify($check_pass, $old_password))
      {
        $check = 1;
      }
      else
      {
         $check = "error";
      }
    }
    else{
       $check = "error";  
    }
    return $check;
    }


    public function compare_passwords_forgot()
    {
        $new_password = $_POST['new_password'];
        $check_new_password = $_POST['check_pass'];
        if($new_password == $check_new_password){
            $check = 1;
        }
        else
        {
            $check = "error_1";
        }
        return $check;
    }

    public function db_update_pass()
    {
        $update = $this->login_verify();
        $verify = $this->pass_verify();
        $compare = $this->compare_passwords_forgot();
        if(is_array($update)){
         if($verify == 1 && $compare == 1){
        $id = $update[0];
        $new_password = $_POST['new_password'];
        $query = "UPDATE users SET password_user = $new_password WHERE id = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }
    }
    else
    {
       $check = "error";
    }
    return $check;
    }
    

    public function check_ban(){
        $update = $this->login_verify();
        if($update['banned'] == 1)
        {
        $error = "error_2";
        }
        else{
            $error = 1;
        }
        return $error;
    }

    public function role_checker(){
        $update = $this->login_verify();
        $role = $update['role_id'];
        switch($role)
        {
            case $role == 1: $roleid = "admin"; break;
            case $role == 2: $roleid = "writter"; break;
            case $role == 3: $roleid = "regular"; break;
        }
        return $roleid;
    }

public function login_user(){
    $update = $this->login_verify();
    $verify = $this->pass_verify();
    $ban = $this->check_ban();
    $roleid = $this->role_checker();
    if(is_array($update))
    {
        if($verify == 1 )
        {
            if($ban == 1){
            $_SESSION['id']=$update['id'];
            $_SESSION['username']=$update['nickname'];
            $_SESSION['role']=$roleid;
        }
        else{
            $error = "Пользователь забанен";
        }   

        }
        else
        {
             $error = "Неправильный логин/Пароль";
        }
    }
    else
    {
      $error = "Неправильный логин/Пароль";
    }
     
     return $error;
}

}
?>