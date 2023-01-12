<?php

class DBconn{

    private $host='localhost';
    private $dbname='icb0006_uf4_pr01';
    private $user='root';
    private $password='';
    public  $conn;

    public function _construct(){
        $this->host = 'localhost';
        $this->dbname = 'icb0006_uf4_pr01';
        $this->user = 'nightfish';
        $this->password = '';
    }

    public function connect(){
        $this->conn = null;

        try{
            $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->user,$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo 'Connection failed: '.$e->getMessage();
        }
        return $this->conn;
    }
}
?>