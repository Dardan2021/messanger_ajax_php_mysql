<?php
include"init.php";
?>
 
   
<?php
$obj=new base_class;
if(isset($_POST['log-in'])){
    $email=$obj->security($_POST['email']);
    $password=$obj->security($_POST['password']);
    $status=$passws=$emails=1;
    if(empty($email)){
        $email_error="email eshte i nevojshem";
        $emails=0;
    }
    if(empty($password)){
        $password_error="passwordi eshte i nevojshem";
        $passws=0;
    }
    if(!empty($passws)&& !empty($emails)){
       if( $obj->Normal_Query("SELECT*FROM users where email=?",[$email])){
           if($obj->Count_Rows()==0){
               $email_error="Ky email nuk gjendet ne llogarin tuaj";
           }
         else{
               $row=$obj->Single_Result();
               $db_email=$row->email;
               $passworddb=$row->password;
               $user_id=$row->user_id;
               $user_name=$row->name;
               $user_image=$row->image;
               $clean_status=$row->clean_status;
          if(password_verify($password, $passworddb)){
              $status=1;
             
            $obj->Normal_Query("UPDATE users SET status=? where  user_id=?",[$status,$user_id]);
            if($clean_status==0){
                if($obj->Normal_Query("SELECT msg_id FROM messages ORDER BY msg_id DESC LIMIT 1")){
                    $last_row=$obj->Single_Result();
                    $last_msg_id= $last_row->msg_id+1;
                    if($obj->Normal_Query("INSERT INTO clean (clean_message_id,clean_user_id) VALUES(?,?)",[$last_msg_id,$user_id])){
                        $update_clean_status=1;
                        $obj->Normal_Query("UPDATE users SET clean_status=? where user_id=?",[$update_clean_status,$user_id]);
                        $obj->Create_Session("user_name",$user_name);
                        $obj->Create_Session("user_id",$user_id);
                        
                        $obj->Create_Session("user_image",$user_image);
                        header("location:index.php");
                    }
                }
            }
            else{
                $obj->Create_Session("user_name",$user_name);
                $obj->Create_Session("user_id",$user_id);
                $obj->Create_Session("user_image",$user_image);
                header("location:index.php");
            } }
                else{
                $password_error="passwordi eshte i gabuar";
               
            }
          
       }
    }
}}
?>
<style>
        .flash{
        position:fixed;
        top:30%;
        left:40%;
        width:40rem;
        height:auto;
        background-color:#e4e7ea;
        padding:1.5rem;
        color:green;
        justify-content:space-between;
        display:flex;
    }

.account-right{
   
}
    .flashe{
        position:fixed;
        top:30%;
        left:40%;
        width:40rem;
        height:auto;
        background-color:#e4e7ea;
        padding:1.5rem;
        color:red;
        justify-content:space-between;
        display:flex;
    }
    .remove{
        font-size:1rem;
        color:black;
    }
    .removee{
        font-size:1rem;
        color:black;
    }
    .remove:hover{
        cursor:pointer;
    }
    .removee:hover{
        cursor:pointer;
    }
    
    </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Create new account</title>
    <?php include"components/css.php";?>
</head>
<body>
<?php if(isset($_SESSION['security'])): ?>
<div class="flash " id="flashi">
    <h5><?php echo $_SESSION['security'];?></h5>
   
    <span class="remove">  <i class="fas fa-minus-circle"></i> </span>
      
    
</div>
<?php
endif;
?>
<?php
unset($_SESSION['security']);
?>
<div class="container-fluid ">
    <div class="row signup-container d-flex  ">
        <div class="account-left col  col-lg-9  col-md-9 col-12">
                <div class="banner ">
							   <h1 class="tekst-primar">Chat with me <i class="fas fa-comments"></i></h1>
				</div>
        </div>
        <div class="account-right col  text-center col-lg-3 col-md-3 col-12">
             <?php include"components/form-login.php";?> 
        </div>
        </div>
    </div><!-- close signup container-->



</div>



<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".remove").click(function(){
            $("#flashi").hide();
        });
        setTimeout(function()  {
           $("#flashi").fadeOut("slow");
        }, 1500);
    })

</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".removee").click(function(){
            $("#flashe").hide();
        })
    })
</script>
</body>
</html>