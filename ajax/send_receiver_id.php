<?php
include"../init.php";

$obj=new base_class;

if(isset($_POST['user_send'])){
    $obj->Normal_Query("SELECT * FROM `users` WHERE user_id=?",[$_POST['user_send']]);

    $obj->Create_Session("ID",$_POST['user_send']);
    $user_row=$obj->Single_Result();
    $name=$user_row->name;
    $obj->Create_Session("receiver",$name);
    header("location:../index.php");
   
}

else{
    echo"nuk u shtyp";
}
?>