<?php
include"../init.php";
$obj=new base_class;

//$user_send=$_SESSION['user_send_id'];

 $host="localhost:3307";
 $dbname="mesazh";
 $username="root";
 $password="";
 
$con=mysqli_connect($host, $username,  $password, $dbname);

if(isset($_SESSION['ID'])){ 
if(isset($_POST['message'])){
    $id_send=$_SESSION['ID'];
    $user_id=$_SESSION["user_id"];
    //if($obj->Normal_Query("SELECT clean_message_id FROM clean WHERE clean_user_id=?",[$user_id])){
      //  $last_row=$obj->Single_Result();

    //  $obj->Normal_Query("SELECT msg_id FROM messages  where user_id=? AND user_id_sent=?",[$user_id,$id_send]);
      //$msg_row=$obj->Single_Result();
    
        $SQL="SELECT * FROM `messages` m ,`users` u  where m.user_id=u.user_id AND u.user_id IN($user_id,$id_send) AND m.user_id_sent IN($id_send,$user_id)  ORDER BY msg_time ASC";
        $result=mysqli_query($con,$SQL);
       



        

        while ($row = mysqli_fetch_assoc($result)) {
            
        

  
      $full_name=ucwords($row['name']);
        $user_image=$row['image'];
        $user_status=$row['status'];
        $message=$row['message'];
        $msg_type=$row['msg_type'];
        $msg_time=$row['msg_time'];
        $db_user_id=$row['user_id'];
        $db_user_id_send=$row['user_id_sent'];
        $id_send=$_SESSION["ID"];
        if($user_status==0){
            $user_online_status=' <span class="offline-icon">
                        
            </span>';
        }
        else{
            $user_online_status='<span class="online-icon">
                        
            </span>';
        }
        if($db_user_id==$user_id){
            if($msg_type=="text"){
                    echo'<div class="right-messages my-5 d-flex">
                    <div class="  sender-img-block">
                            
                            
                    
                            '.$user_online_status.'
                        </div>
                      <div class="right-msg-area">
                       
                            <span class=" right-time">
                           '.$msg_time.'
                            </span>
                            <div class="right-msg">
                                    <p>'.$message.'
                                    </p>
                            </div>
                        </div>
                     
                    </div>';
            }
            else if($msg_type=="jpg"||$msg_type=="jpg"||$msg_type=="jpeg"||$msg_type=="JPG"){
                echo'<div class="right-messages my-5 d-flex">
                <div class="  sender-img-block">
                        
                <img src="assets/img/'.$user_image.'" class="sender-img" alt="">
                        '.$user_online_status.'
                    </div>
                  <div class="right-msg-area">
                   
                        <span class=" right-time">
                        '.$msg_time.'
                        </span>
                        <div class="right-msg">
                               <div class="right-file">
                                    <img src="assets/img/'.$message.'" style="width:17rem;height:auto;"class="common-images">
                               </div>
                        </div>
                    </div>
                 
                </div>';
            }
            else if($msg_type=="png"||$msg_type=="PNG"){
                echo'<div class="right-messages my-5 d-flex">
                <div class="  sender-img-block">
                        
                <img src="assets/img/'.$user_image.'" class="sender-img" alt="">
                        '.$user_online_status.'
                    </div>
                  <div class="right-msg-area">
                   
                        <span class=" right-time">
                        '.$msg_time.'
                        </span>
                        <div class="right-msg">
                               <div class="right-file">
                                    <img src="assets/img/'.$message.'" class="common-images">
                               </div>
                        </div>
                    </div>
                 
                </div>';
            }
            
            else if($msg_type=="zip"||$msg_type=="ZIP"){
                echo'<div class="right-messages my-5 d-flex">
                <div class="  sender-img-block">
                        
                <img src="assets/img/'.$user_image.'" class="sender-img" alt="">
                        '.$user_online_status.'
                    </div>
                  <div class="right-msg-area">
                   
                        <span class=" right-time">
                        '.$msg_time1.'
                        </span>
                        <div class="right-msg">
                               <div class="right-file">
                                   <a class="filess"  style="text-decoration:none;" href="assets/img/'.$message.'"><i class="fas fa-arrow-circle-down"></i>'.$message.'</a>
                               </div>
                        </div>
                    </div>
                 
                </div>';
            }
            else if($msg_type=="PDF"||$msg_type=="pdf"){
                echo'<div class="right-messages my-5 d-flex">
                <div class="  sender-img-block">
                        
                <img src="assets/img/'.$user_image.'" class="sender-img" alt="">
                        '.$user_online_status.'
                    </div>
                  <div class="right-msg-area">
                   
                        <span class=" right-time">
                        '.$msg_time.'
                        </span>
                        <div class="right-msg">
                               <div class="right-file">
                                   <a class="filess"  style="text-decoration:none;" href="assets/img/'.$message.'"><i class="fas fa-file-pdf"></i>'.$message.'</a>
                               </div>
                        </div>
                    </div>
                 
                </div>';
            }
            else if($msg_type=="docx"){
                echo'<div class="right-messages my-5 d-flex">
                <div class="  sender-img-block">
                        
                <img src="assets/img/'.$user_image.'" class="sender-img" alt="">
                        '.$user_online_status.'
                    </div>
                  <div class="right-msg-area">
                   
                        <span class=" right-time">
                        '.$msg_time.'
                        </span>
                        <div class="right-msg">
                               <div class="right-file">
                                   <a class="filess"  style="text-decoration:none;" href="assets/img/'.$message.'"><i class="fas fa-file-word"></i>'.$message.'</a>
                               </div>

                        </div>


                    </div>
                 
                </div>';
                
                
            }
            else if($msg_type=="xlsx"){
                echo'<div class="right-messages my-5 d-flex">
                <div class="  sender-img-block">
                        
                <img src="assets/img/'.$user_image.'" class="sender-img" alt="">
                        '.$user_online_status.'
                    </div>
                  <div class="right-msg-area">
                   
                        <span class=" right-time">
                        '.$msg_time.'
                        </span>
                        <div class="right-msg">
                               <div class="right-file">
                                   <a class="filess"  style="text-decoration:none;" href="assets/img/'.$message.'"><i class="fas fa-file-excel"></i>'.$message.'</a>
                               </div>
                        </div>
                    </div>
                 
                </div>';
            
            }
            else if($msg_type=="emoji"){
                echo'<div class="right-messages my-5 d-flex">
                <div class="  sender-img-block">
                        
                <img src="assets/img/'.$user_image.'" class="sender-img" alt="">
                        '.$user_online_status.'
                    </div>
                  <div class="right-msg-area">
                   
                        <span class=" right-time">
                        '.$msg_time.'
                        </span>
                        <div class="right-msg">
                               <div class="right-file">
                                    <img src="'.$message.'" style="width:5rem;height:auto;"class="common-images">
                               </div>
                        </div>
                    </div>
                 
                </div>';
            }
        }
   

       
        if(($db_user_id_send===$user_id)){
            
        
      
        if($msg_type=="text"){
            echo' <div class="left-message">
            <div class="sender-img-block">
                
                <img src="assets/img/'.$user_image.'" class="sender-img" alt="">
                '.$user_online_status.'
            </div>
            <div class="left-msg-area">
                <div class="user-name-date">
                    <span class="sender-name">
                    '.$full_name.'
                    </span>
                    <span class="data-time">
                    '.$msg_time.'
                    </span>
                </div>
                <div class="left-msg">
                    <p>'.$message.'
                    </p>
                </div>
            </div>
        </div>';
    }
        else if($msg_type=="PDF"||$msg_type=="pdf"){echo' <div class="left-message">
        <div class="sender-img-block">
            
            <img src="assets/img/'.$user_image.'" class="sender-img" alt="">
            '.$user_online_status.'
        </div>
        <div class="left-msg-area">
            <div class="user-name-date">
                <span class="sender-name">
                '.$full_name.'
                </span>
                <span class="data-time">
                '.$msg_time.'
                </span>
            </div>
            <div class="left-msg">
            <a class="filess"  style="text-decoration:none;" href="assets/img/'.$message.'"><i class="fas fa-arrow-circle-down"></i>'.$message.'</a>
            </div>
        </div>
    </div>';
    }
    else if($msg_type=="jpg"||$msg_type=="jpg"||$msg_type=="jpeg"||$msg_type=="JPG"){
        echo' <div class="left-message">
        <div class="sender-img-block">
            
            <img src="assets/img/'.$user_image.'" class="sender-img" alt="">
            '.$user_online_status.'
        </div>
        <div class="left-msg-area">
            <div class="user-name-date">
                <span class="sender-name">
                '.$full_name.'
                </span>
                <span class="data-time">
                '.$msg_time.'
                </span>
            </div>
            <div class="left-msg">
            <img src="'.$message.'" style="width:5rem;height:auto;"class="common-images">
            </div>
        </div>
    </div>';}
    else if($msg_type=="png"||$msg_type=="PNG"){
        echo' <div class="left-message">
        <div class="sender-img-block">
            
            <img src="assets/img/'.$user_image.'" class="sender-img" alt="">
            '.$user_online_status.'
        </div>
        <div class="left-msg-area">
            <div class="user-name-date">
                <span class="sender-name">
                '.$full_name.'
                </span>
                <span class="data-time">
                '.$msg_time.'
                </span>
            </div>
            <div class="left-msg">
            <img src="'.$message.'" style="width:5rem;height:auto;"class="common-images">
            </div>
        </div>
    </div>';
    }
    else if($msg_type=="zip"||$msg_type=="ZIP"){
        echo' <div class="left-message">
        <div class="sender-img-block">
            
            <img src="assets/img/'.$user_image.'" class="sender-img" alt="">
            '.$user_online_status.'
        </div>
        <div class="left-msg-area">
            <div class="user-name-date">
                <span class="sender-name">
                '.$full_name.'
                </span>
                <span class="data-time">
                '.$msg_time.'
                </span>
            </div>
            <div class="left-msg">
            <a class="filess"  style="text-decoration:none;" href="assets/img/'.$message.'"><i class="fas fa-arrow-circle-down"></i>'.$message.'</a>
            </div>
        </div>
    </div>';
    }
    
        else if($msg_type=="docx"){
            echo' <div class="left-message">
            <div class="sender-img-block">
                
                <img src="assets/img/'.$user_image.'" class="sender-img" alt="">
                '.$user_online_status.'
            </div>
            <div class="left-msg-area">
                <div class="user-name-date">
                    <span class="sender-name">
                    '.$full_name.'
                    </span>
                    <span class="data-time">
                    '.$msg_time.'
                    </span>
                </div>
                <div class="left-msg">
                <a class="filess"  style="text-decoration:none;" href="assets/img/'.$message.'"><i class="fas fa-file-word"></i>'.$message.'</a>
                </div>
            </div>
        </div>';
        
        }


    else if($msg_type=="xlsx"){
        echo' <div class="left-message">
        <div class="sender-img-block">
            
            <img src="assets/img/'.$user_image.'" class="sender-img" alt="">
            '.$user_online_status.'
        </div>
        <div class="left-msg-area">
            <div class="user-name-date">
                <span class="sender-name">
                '.$full_name.'
                </span>
                <span class="data-time">
                '.$msg_time.'
                </span>
            </div>
            <div class="left-msg">
            <a class="filess"  style="text-decoration:none;" href="assets/img/'.$message.'"><i class="fas fa-file-excel"></i>'.$message.'</a>
            </div>
        </div>
    </div>';


          }
    else if($msg_type=="emoji"){
        echo' <div class="left-message">
        <div class="sender-img-block">
            
            <img src="assets/img/'.$user_image.'" class="sender-img" alt="">
            '.$user_online_status.'
        </div>
        <div class="left-msg-area">
            <div class="user-name-date">
                <span class="sender-name">
                '.$full_name.'
                </span>
                <span class="data-time">
                '.$msg_time.'
                </span>
            </div>
            <div class="left-msg">
            <img src="'.$message.'" style="width:5rem;height:auto;"class="common-images">
            </div>
        </div>
    </div>';
    

    
    }

       }
    
//  echo $informations->message,"<br>";

     }

   
}

}
       
   
    
       
       
     
       
       
       

?>


