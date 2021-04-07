<?php
class db{
    private $host="localhost:3307";
    private $dbname="mesazh";
    private $username="root";
    private $password="";
    protected $con;
    public function __construct(){
        try{

        
        $this->con=new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->username,$this->password,);
           
    }
    catch(Excpetion $a){
        echo"Database connection problem".$a->getMessage();
        
    }
    }

}
?>