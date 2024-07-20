<?php 
function html_encode($encoded_array)
{
    $nickname = htmlspecialchars(strip_tags($encoded_array['nickname']));
    $email = htmlspecialchars(strip_tags($encoded_array['email']));
    $password_user = htmlspecialchars(strip_tags($encoded_array['password']));
    $pass_hash = password_hash($password_user, PASSWORD_DEFAULT);
    $encode_array = [$nickname, $email, $pass_hash];
    return $encode_array;
}

?>