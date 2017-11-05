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

foreach ($query = $mysqli->query($sql) as $value) {
  echo "name: ".$value['name']."<br/>";
  echo "email: ".$value['email']."<hr/>";
}

// $query = $mysqli->query($sql);
//
// while ($data = $query->fetch_assoc()) {
//   echo "Name: ".$data['name']."<br/>";
//   echo "Email: ".$data['email']."<hr/>";
// }

#fetch_all()
// $sql = "select name, email from user";
//
// if ($query = $mysqli->query($sql)) {
//   $user =  $query->fetch_all(MYSQLI_BOTH);
//   // var_dump($user);
//
//   // echo "Name: ".$user[0][0]."<br/>";
//   // echo "Email: ".$user[0]["email"]."<br/>";
//   foreach ($user as $value) {
//     echo "Email".$value["email"]."<br/>";
//   }
// }

#fetch_row()
  // $user =  $query->fetch_row();
  // var_dump($user);
  // echo "name: ".$user[0]."<br/>";

#fetch_object()
  // $user =  $query->fetch_object();
  // var_dump($user);
  // echo "name: ".$user->email."<br/>";

  // while ($user = $query->fetch_object()) {
  //   $row[] = $user;
  // }
  // foreach ($row as $value) {
  //   echo "name: ".$value->name."<br/>";
  // }

 ?>
