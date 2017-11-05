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

$sql = "select name, email from user";

if ($query = $mysqli->query($sql)) {
  # code...
}

?>
