<form  method="post" action="">
                    <h4 class="form-heading">Vendos passwordin e ri </h4>
                   
                    <div class="group">
                        <input type="password" name="current_password" class="control" placeholder="vendos passwordin e tanishem">
                        <?php
                                if(isset($current_password_error)):  ?>
                            <?php     echo "<p class='text-danger'>".$current_password_error."</p>";  ?>
                            <?php  endif;
                            ?>
                    </div>
                    <div class="group">
                        <input type="password" name="new_password" class="control" placeholder="vendos passwordin e ri" value=>
                        <?php
                                if(isset($new_password_error)):  ?>
                            <?php     echo "<p class='text-danger'>".$new_password_error."</p>";  ?>
                            <?php  endif;
                            ?>
                    </div>
                    <div class="group">
                        <input type="password" name="new_password_retype" class="control" placeholder="rivendos passwordin e ri">
                        <?php
                                if(isset($retype_password_error)):  ?>
                            <?php     echo "<p class='text-danger'>".$retype_password_error."</p>";  ?>
                            <?php  endif;
                     ?>
                    </div>
                    
                    <div class="group">
                        <input type="submit" name="change_password" value="ndrysho password" class="btn btn-danger  btn-signup" >
                        
                    </div>
                    
</form>

