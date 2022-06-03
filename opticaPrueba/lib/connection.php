<?php
 class Connection{
     private $server;
     private $user;
     private $database;
     private $link;
     private $port;
     private $pass;


 function __construct(){
     $this->setconnect();
     $this->connect();
 }

 private function setconnect(){
    require_once 'conf.php';

    $this->server=$server;
    $this->user=$user;
    $this->database=$database;
    $this->port=$port;
    $this->pass=$pass;
 }

 private function connect(){
     //(server, user, pass, database)
     $this->link=mysqli_connect($this->server,$this->user,$this->pass,$this->database);
 

 if(!$this->link){
     echo mysqli_error($this->link);
 }else{
     
 }
}

public function getconnect(){
    return $this->link;
}

public function close(){
    return mysqli_close($this->link);
}
}
?>