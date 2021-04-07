<!DOCTYPE html>
<?php include"init.php";

?>
<?php if(!isset($_SESSION['user_id'])):?>
    <?php header("location:login.php");?>
    <?php $obj= new base_class;
    $obj->Create_Session("security","ju duhet te logoni ne fillim")
    ?>
<?php endif;?>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Messangeri</title>
    <?php include"components/css.php";?>
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
    .file_error{
        color:white;
        background-color:red;
        position:fixed;
        top:78.5%;
        left:20%;
        width:80%;
        height:auto;
        opacity:0.7;
        
        padding:1.5rem;
        
        justify-content:space-between;
        display:flex;
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
    .emoji-same{
        cursor:pointer;
    }
    </style>
</head>
<body>
<?php if(isset($_SESSION['password_updated'])): ?>
   
<div class="flash " id="flashi">
    <h5><?php echo $_SESSION['password_updated'];?></h5>
   
    <span class="remove">  <i class="fas fa-minus-circle"></i> </span>
      
    
</div>
<?php
endif;
?>
<?php
unset($_SESSION['password_updated']);
?>



<?php include"components/nav.php";?>

<div class="chat-container">

<?php include"components/sidebar.php";?>
    <section id="right-area">
    <?php

   
     include"components/messages.php";
     
    ?>
    
    <?php include"components/chatform.php";?>
    
       
       
    </section>
</div>




 
<?php include"components/js.php";?>
<script type="text/javascript">
    $(document).ready(function(){
        $(".remove").click(function(){
            $("#flashi").hide();
        });
        setTimeout(function()  {
           $("#flashi").fadeOut("slow");
        }, 3000);
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