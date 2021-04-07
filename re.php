<?php include"init.php";

?>
  <form action="ajax/send_receiver_id.php"  method="POST">
<?php 

$obj=new base_class;
$user_id=$_SESSION['user_id'];


     if($obj->Normal_Query("SELECT*FROM users where user_id !=?",[$user_id])){
       
        $num=$obj->Count_Rows();
        $num_rows=$obj->fetch_all();
        
            foreach ($num_rows as $information){
                $name=$information->name;
                $user_send_id=$information->user_id;
              
               
                
    ?>

    
    
        
    
<?php
            
                }
                
            }
            
  
        
    
                    
?>
<input type="submit" class="my-2 button btn btn-danger"  id="butoni" name="user_send" value=3>
 </form>