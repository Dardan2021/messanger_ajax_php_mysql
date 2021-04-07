<?php include"init.php";?>
<?php if(!isset($_SESSION['user_id'])):?>
    <?php header("location:login.php");?>
<?php endif;?>
<?php

$obj=new base_class;
if(isset($_POST['change_name'])){
    $name=$_POST['name'];
    $user_id=$_SESSION['user_id'];
        if($obj->Normal_Query("SELECT password from users where user_id=?",[$user_id])){
        $row=$obj->Single_Result();
        $Db_password=$row->password;
        
            if($obj->Normal_Query("UPDATE users SET name=? where user_id=?",[$name,$user_id])){
                $obj->Create_Session("user_name",$name);
               
                header("location:index.php");

            }
           
        
        else{
           
        }
                    
    }
}
?>
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
           <?php include"components/name_change.php";?>
           </div>
       </div>
       
    </section>
</div>

<?php include"components/js.php";?>
</body>
</html>