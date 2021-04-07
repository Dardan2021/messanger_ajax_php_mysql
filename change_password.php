<?php include"init.php";?>
<?php 

$obj=new base_class;
$user_id=$_SESSION['user_id'];

if(isset($_POST['change_password'])){
     if($obj->Normal_Query("SELECT*FROM users where user_id=?",[$user_id])){
        $row=$obj->Single_Result();
        
        $user_password=$row->password;
    
        $current_password=$obj->security($_POST['current_password']);
    
    $new_password=$obj->security($_POST['new_password']);
    $new_password_retype=$obj->security($_POST['new_password_retype']);
    $current_status=$new_status=$retype_status=1;
    if ($current_password!=$user_password){

        $current_password_error="ju lutem vendosni passwordin e duhur";
    }
    if( $new_password!=$new_password_retype){
        $retype_password_error="ju lutem konfirmoheni sakte";
    }
    else{
        
            if($obj->Normal_Query("UPDATE users SET password=? where user_id=?",[password_hash( $new_password,PASSWORD_DEFAULT),$user_id])){
                $obj->Create_Session("password_updated","Your password is succesfully updated");
                header("location:index.php");

            }
           
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
           <?php include"components/password.php";?>
           </div>
       </div>
       
    </section>
</div>

<?php include"components/js.php";?>
</body>
</html>