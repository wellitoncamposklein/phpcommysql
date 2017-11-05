<?php
require_once("user.php");
require_once("service_user.php");

$server = "localhost";
$user = "root";
$pass = "123mudar";
$database = "teste";

//conexão com mysqli
@$mysqli = new mysqli($server,$user,$pass,$database);

//Error
if (mysqli_connect_errno()) {
  echo "Failed to connect (".$mysqli->connect_errno.") ".$mysqli->connect_error;
  exit;
}

$user = new User();

$user->setName("Pedro")->setEmail("Pedro@email.com");
 // echo "Ret: ".$serviceUser->delete()."<br/>";

$serviceUser = new Service_user($mysqli,$user);

echo $serviceUser->insert();

$rest = $serviceUser->list();
foreach ($rest as $value) {
  echo $value['id']."<br/>";
  echo $value['name']."<br/>";
  echo $value['email']."<hr/>";
}
// var_dump($user->list());
?>
