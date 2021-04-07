<?php include"init.php";

?>
<?php
$obj=new base_class;

if(isset($_POST['user_send'])){
$obj->Create_Session("ID",$_POST['user_send']);

}
?>