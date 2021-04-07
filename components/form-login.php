<style>
       
 
</style>

<div class="">


           <form class="form-area"  method="POST" action="">
         
                <h4 class="form-heading">Hyr ne sistem </h4>
                <div class="group">
                <input type="text" name="email"  class="control" placeholder="vendos email-in tend">
                    <?php
                            if(isset($email_error)):  ?>
                           <?php     echo "<p class='text-danger'>".$email_error."</p>";  ?>
                           <?php  endif;
                        ?>

                </div>
              
                
                <div class="group">
                        <input type="password" name="password" class="control" placeholder="vendos passwordin tend"  class="control" placeholder="vendos email-in tend">
                        <?php
                                if(isset($password_error)):  ?>
                            <?php     echo "<p class='text-danger'>".$password_error."</p>";  ?>
                            <?php  endif;
                            ?>
                    
                </div>
               
                <div class="group">
                    <input type="submit" value="login" name="log-in" class="btn btn-danger  " >
                    
                </div>
              
                <?php if(isset($_SESSION['account_success'])): ?>
                <div class="alert-success alert">
                <?php echo "<h3>".$_SESSION['account_success']."</h3>";?>
                <?php endif;?>
                <?php  unset($_SESSION['account_success']);?>
                </div>
            </form>
            </div>