<?php
include"init.php";

$obj=new base_class;
if($obj->Normal_Query("SELECT name from users")){
    $rows =$obj->Fetch_All();
}

 echo $password=md5("12345678");
?>