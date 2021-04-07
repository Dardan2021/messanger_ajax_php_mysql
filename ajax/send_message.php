<?php
include"../init.php";






if(isset($_SESSION['ID'])){
if(isset($_POST['send_message1'])){
    $message=$_POST['send_message1'];
    $id_send=$_SESSION['ID'];
    $user_id=$_SESSION['user_id'];
    $msg_type="text";
$obj=new base_class;
    if($obj->Normal_Query("INSERT INTO `messages`( `message`, `msg_type`, `user_id`,`user_id_sent`)  VALUES(?,?,?,?)",[$message,$msg_type,$user_id,$id_send])){
        echo json_encode(['status'=>'success']);
      
    }
   

}}

else{
    echo"nuk u shtyp";
}
?>