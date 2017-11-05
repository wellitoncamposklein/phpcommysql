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

  public function list(){
    
  }

  public function insert(){
    $stmt = $this->db->stmt_init();
    $stmt->prepare("insert into user (name,email) value (?,?)");
    $stmt->bind_param("ss",$this->name,$this->email);
    $stmt->execute();
    return $stmt->insert_id;
  }

  public function update(){

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
