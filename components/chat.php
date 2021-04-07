<form action="">
<?php 
for($i=0;$i<$num;$i++)
{ if(isset($_SESSION["user_toSend"])){ 
    
  echo'<button class="btn btn-danger" value="">';
   echo $_SESSION["user_toSend"];
   echo '</button>';

}
   
}?>
    

</form>