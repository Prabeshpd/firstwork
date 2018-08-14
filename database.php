<?php
require_once ("config.php");
class Database{
  public $connection;
  function __construct(){
      $this->db_connection();
  }
  public function db_connection(){
      $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS, DB_NAME);
      if ($this->connection->connect_errno) {
          die ("connection failed badly". $this->connection->connect_error);
      }
  }
  public function query($sql){
      $result = $this->connection->query($sql);
      return $result;
  }
  private function confirm_query($result){
      $this->confirm_query($result);
      if(!$result){
          die("Query failed".$this->connection->error);
      }
  }
  public function escape_string($string){
      $escaped_string = mysqli_real_escape_string($this->connection,$string);
      return $escaped_string;
  }
  public function the_insert_id(){
      return $this->connection->insert_id;
  }

}
$database = new Database();






?>