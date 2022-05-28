<?php

class database {
  private $host = 'localhost';
  private $username = 'root';
  private $password = '';
    private $name = 'ecommerce_oop';
    private $con;
    function __construct()
    {
        $this->con = new mysqli($this->host,$this->username,$this->password,$this->name);
        if($this->con->connect_error){
            die("Connection Failed : $this->con->connect_error");
        }
      // else{
      //   echo "Connected successfully";

      // }
    }

    public function runDML($query)
    {
       $result = $this->con->query($query);
       if($result){
            return TRUE;
       }else{
            return FALSE;
       }
    }

    public function runDQL($query)
    {
      $result = $this->con->query($query);
      if ($result->num_rows > 0)
      {
        return $result;
      }else
      {
        return [];
      }

    }
}
// $test = new database;