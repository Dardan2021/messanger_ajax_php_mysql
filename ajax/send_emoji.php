<?php
include"../init.php";
$obj= new base_class;
if(isset($_SESSION['ID'])){
if(isset($_POST['send_emoji'])){
    $id_send=$_SESSION['ID'];
    $emoji=$_POST['send_emoji'];
    $user_id=$_SESSION['user_id'];
    $msg_type="emoji";

    if($obj->Normal_Query("INSERT INTO `messages`( `message`, `msg_type`, `user_id`,`user_id_sent`)  VALUES(?,?,?,?)",[$emoji,$msg_type,$user_id,$id_send])){
        echo json_encode(['status'=>'success']);
    }
}
else{
    echo"nuk u shtyp";
}
}
?>