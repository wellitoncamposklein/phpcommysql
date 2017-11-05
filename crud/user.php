<?php

class User
{

  private $db;

  private $id;
  private $name;
  private $email;

  function __construct(Mysqli $mysqli)
  {
    $this->db = $mysqli;
  }

  public function list($order = null){
    if ($order) {
      $sql = "select * from user order by {$order}";
    }else {
      $sql = "select * from user";
    }

    $query = $this->db->query($sql);
    return $query->fetch_all(MYSQLI_ASSOC);
  }

  public function insert(){
    $stmt = $this->db->stmt_init();
    $stmt->prepare("insert into user (name,email) value (?,?)");
    $stmt->bind_param("ss",$this->name,$this->email);
    $stmt->execute();
    return $stmt->insert_id;
  }

  public function update(){
    $stmt = $this->db->stmt_init();
    $stmt->prepare("update user set name = ?, email = ? where id = ?");
    $stmt->bind_param("ssi",$this->name,$this->email,$this->id);
    $stmt->execute();
    return $stmt->execute();
  }

  public function delete(){

  }

  public function getId(){
    return $this->id;
  }

  public function setId($id){
    $this->id = $id;
    return $this;
  }

  public function getName(){
    return $this->name;
  }

  public function setName($name){
    $this->name = $name;
    return $this;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($email){
    $this->email = $email;
    return $this;
  }
}
