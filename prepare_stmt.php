<?php

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

$stmt = $mysqli->stmt_init();
$stmt->prepare("select name, email from user where id = ? and name = ?");
$stmt->bind_param("is",$_GET["id"],$_GET["name"]);
$stmt->execute();
$stmt->bind_result($name,$email);
$stmt->fetch();

echo "Name: ".$name."<br/>";
echo "Email: ".$email."<hr/>";

// if ($query = $mysqli->query($sql)) {
//
// }


 ?>
