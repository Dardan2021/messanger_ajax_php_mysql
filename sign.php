<?php
include"init.php";

$obj=new base_class;
if(isset($_POST["sign-up"])){
   
    $full_name=$obj->security($_POST['full_name']);
    $email=$obj->security($_POST['email']);
    $password=$obj->security($_POST['password']);
    $imgf=$_FILES['img']['name'];
    $imgtmp=$_FILES['img']['tmp_name'];
    $status=$name=$passws=$emails=$photo=1;
    $img_path="assets/img";
    $extension=['jpg','jpeg','png'];
    $img_ext=explode(".",$imgf);
    $img_extension=end($img_ext);
    if(empty($full_name)){
        $name_error="emer  i nevojshem";
        $name=0;
        $status=0;
    }
    if(empty($email)){
        $emailerr="email  i nevojshem";
        $emails=0;
        $status=0;
    }

    else{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailerr="emaili format i gabuar";
            $emails=0;
            $status=0;
        }
        else{
           if($obj->Normal_Query("Select email from users where email=?",array($email))){
               if($obj->Count_Rows()==0){

               }
               else{
                $emailerr="Ky email ekziston";
                $emails=0;
                $status=0;
              
                
               }
               
           }
        }
    }
   
    if(empty($password)){
        $passerr="password  i nevojshem";
        $passws=0;
        $status=0;
    }
    else if(strlen($password)<5){
        $passerr="password  i shkurter";
        $passws=0;
        $status=0;
    }
    if(empty($imgf)){
       $imgerr="fotoja duhet";
        $photo=0;
        $status=0;
    }
    else if(!in_array($img_extension,$extension)){

        $imgerr="fotoja nuke eshte ne formatin e duhur ";
        $photo=0;
        $status=0;
    }
    if(!empty($name)&&!empty($email)&&!empty($passws)&&!empty($photo)&& $status!=0){
        
        $status=0;
        $clean_status=0;
        move_uploaded_file($imgtmp,"$img_path/$imgf");
        
        if($obj->Normal_Query("INSERT into users (name,email,password,image,status,clean_status) values(?,?,?,?,?,?)",[$full_name, $email,password_hash($password,PASSWORD_DEFAULT),$imgf,$status,$clean_status ])){
            $obj->Create_Session("account_success","Accounti u krijua");
            header("location:login.php");
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
    <title>Krijo llogari te re</title>
    <?php include"components/css.php";?>
    
</head>
<body>

<div class=" container-fluid ">
<div class="row signup-container  ">
    <div class="account-left col  col-lg-9  col-md-9 col-12">
    <div class="banner ">
							   <h1 class="tekst-primar">Chat with me <i class="fas fa-comments"></i></h1>
				</div>
    </div>
    <div class="account-right col col-lg-3 col-md-3 col-12">
    <?php include"components/form.php";?>
    </div>
    </div>
</div><!-- close signup container-->



</div>


<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/file_label.js"></script>  
</body>
</html>