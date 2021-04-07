<?php include"init.php";?>
<?php if(!isset($_SESSION['user_id'])):?>
    <?php header("location:login.php");?>
<?php endif;?>
<?php

$obj=new base_class;

if(isset($_POST['change_photo'])){
    $photo=1;
    $imgf=$_FILES['img']['name'];
$imgtmp=$_FILES['img']['tmp_name'];
$status=$name=$passws=$emails=$photo=1;
$img_path="assets/img";
$extension=['jpg','jpeg','png'];
$img_ext=explode(".",$imgf);
$img_extension=end($img_ext);
    
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
     else{
        $user_id=$_SESSION['user_id'];
    
      
        move_uploaded_file($imgtmp,"$img_path/$imgf");
        
            if($obj->Normal_Query("UPDATE users SET image=? where user_id=?",[$imgf,$user_id])){
                $obj->Create_Session("user_image",$imgf);
                $obj->Create_Session("image_updated","imazhi u ndryshua");
                header("location:index.php");

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
           <?php include"components/image_change_format.php";?>
           </div>
       </div>
       
    </section>
</div>

<?php include"components/js.php";?>
</body>
</html>
