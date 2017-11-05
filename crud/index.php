<?php
require_once("user.php");

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

$user = new User($mysqli);

// $user->setId("1")->setName("Tom")->setEmail("Tom@email.com");
 // echo "Ret: ".$user->delete()."<br/>";

$ret = $user->find(2);
echo $ret["name"];
// foreach ($rest as $value) {
//   echo $value['id']."<br/>";
//   echo $value['name']."<br/>";
//   echo $value['email']."<hr/>";
// }
// var_dump($user->list());
?>
