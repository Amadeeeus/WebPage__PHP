<?php 
include "./scripts/user_visits.php";
$database = new Database();
$db = $database->dbConnect();

$visits = new User_visits($db);
$visits -> setDate(date('Ymd'));
$visits ->setVisitor_id($_SERVER['REMOTE_ADDR']);


$count = $visits->check_visitors($visits->getDate());

$visits->add_visitor($count, $visits->getDate(), $visits->getVisitor_id());

$users = $visits ->give_count($visits->getDate());

?>