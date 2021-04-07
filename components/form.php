<div class="form-area card p-3">
            <form  method="POST"  enctype="multipart/form-data">
                <h4 class="form-heading">Krijo account te ri </h4>
                <div class="group">
                    <input type="text" name="full_name" class="control" value="<?php
                            if(isset($full_name)):  echo  $full_name; 
                             endif;
                        ?>"
                        
                        placeholder="vendos emrin tend">
                    <div class="name-error err">
                        <?php
                            if(isset($name_error)):  ?>
                           <?php     echo"<p class='text-danger'>" .$name_error."</p>";  ?>
                           <?php  endif;
                        ?>
                    </div>
                </div>
                <div class="group">
                    <input type="text" name="email" value="<?php
                            if(isset($email)): echo $email; 
                             endif;
                        ?>" class="control" placeholder="vendos email-in tend">
                    <?php
                            if(isset($emailerr)):  ?>
                           <?php     echo "<p class='text-danger'>".$emailerr."</p>";  ?>
                           <?php  endif;
                        ?>
                </div>
                <div class="group">
                    <input type="password" name="password" class="control" placeholder="vendos passwordin tend" value="<?php
                            if(isset($password)): echo  $password; 
                             endif;
                        ?>" class="control" placeholder="vendos email-in tend">
                    <?php
                            if(isset($passerr)):  ?>
                           <?php     echo "<p class='text-danger'>".$passerr."</p>";  ?>
                           <?php  endif;
                        ?>
                </div>
                <div class="group">
                    <label for="file" id="file-label"><i class="fas fa-cloud-upload-alt"></i></label>
                    <input type="file" name="img" id="file" class="file my-5">
                    <?php
                            if(isset($imgerr)): 
                     ?>
                   <?php     echo "<p class='text-danger'>".$imgerr."</p>";  ?>
                      <?php  endif;
                        ?>
                </div>
                <div class="group">
                    <input type="submit" name="sign-up" class="btn btn-danger  btn-signup" >
                    
                </div>
                <div class="group">
                    <a href="login.php" class="link">Already have an account</a>
                </div>
            </form>
        </div>