
<?php
include"init.php";
$obj=new base_class;
$status=0;
$user_id=$_SESSION["user_id"];
if($obj->Normal_Query("UPDATE users SET status=? where user_id=?",[$status,$user_id])){

session_destroy();
header("location:login.php");
}
?>
