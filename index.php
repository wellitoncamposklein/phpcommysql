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

// $sql = "select name, email from user";
// $query = $mysqli->query($sql);
//
// while ($data = $query->fetch_assoc()) {
//   echo "Name: ".$data['name']."<br/>";
//   echo "Email: ".$data['email']."<hr/>";
// }

//fetch_all()
$sql = "select name, email from user";

if ($query = $mysqli->query($sql)) {
  $user =  $query->fetch_all(MYSQLI_BOTH);
  // var_dump($user);

  // echo "Name: ".$user[0][0]."<br/>";
  // echo "Email: ".$user[0]["email"]."<br/>";
  foreach ($user as $value) {
    echo "Email".$value["email"]."<br/>";
  }
}

 ?>
