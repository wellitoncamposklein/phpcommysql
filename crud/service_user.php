<?php

class Service_user
{
  private $db;
  private $user;

  function __construct(Mysqli $mysqli, User $user)
  {
    $this->db = $mysqli;
    $this->user = $user;
  }

  public function find($id){
    $stmt = $this->db->stmt_init();
    $stmt->prepare("select name,email from {$this->user->getTable()} where id = ?");
    $stmt->bind_param("i",$this->id);
    $stmt->execute();
    $stmt->bind_result($name,$email);
    $stmt->fetch();

    return array("id" => $id,"name" => $name,"email" => $email );
  }

  public function list($order = null){
    if ($order) {
      $sql = "select * from {$this->user->getTable()} order by {$order}";
    }else {
      $sql = "select * from user";
    }

    $query = $this->db->query($sql);
    return $query->fetch_all(MYSQLI_ASSOC);
  }

  public function insert(){
    $stmt = $this->db->stmt_init();
    $stmt->prepare("insert into {$this->user->getTable()} (name,email) value (?,?)");
    $name = $this->user->getName();
    $email = $this->user->getEmail();
    $stmt->bind_param("ss",$name,$email);
    $stmt->execute();
    return $stmt->insert_id;
  }

  public function update(){
    $stmt = $this->db->stmt_init();
    $stmt->prepare("update {$this->user->getTable()} set name = ?, email = ? where id = ?");
    $name = $this->user->getName();
    $email = $this->user->getEmail();
    $id = $this->user->getId();
    $stmt->bind_param("ssi",$name,$email,$tid);
    $stmt->execute();

    return $stmt->execute();
  }

  public function delete($id){
    $stmt = $this->db->stmt_init();
    $stmt->prepare("delete from {$this->user->getTable()} where id = ?");
    $stmt->bind_param("i",$id);
    $stmt->execute();

    return $stmt->execute();
  }
}


 ?>
