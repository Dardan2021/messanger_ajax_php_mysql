<?php include"init.php";?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Messangeri</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style1.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

<nav id="nav">

</nav>
<div class="chat-container">
<?php include"components/sidebar.php";?>

    <section id="right-area">
       <div class="form-section">
           <div class="form-grid">
           <form action="ajax/send_receiver_id.php" method="POST">
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

    
    <?php echo'<button type="submit" class="my-2 button btn btn-danger"  id="butoni" name="user_send" value='.$user_send_id.' >';
        ?>
        <?php echo  $name ?>
    </button>
<?php
            
                }
                
            }
            
  
        
    
                    
?>
 </form>

           </div>
       </div>
       
    </section>
</div>

<?php include"components/js.php";?>
<script type="text/javascript">
$(document).ready(function() {
   // $(document).on('click', '.button', function(e) {
    
      

      // $.ajax({
        //       type :'POST',
       //      url :'ajax/send_receiver_id.php',
         //      data :{user_send:this.value },
          //   dataType: 'JSON',
          //  success: function(feedback){
           //        if(feedback.status=="success"){
            //             alert("u dergua");
            //     }
           // }
           ////     })
       
    
        
//})  
});
</script>

</body>
</html>