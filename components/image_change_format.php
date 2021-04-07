<form  method="post" action="" enctype="multipart/form-data">
                    <h4 class="form-heading">Vendos passwordin e ri </h4>
                   
                    <div class="group">
                        <label for="file" id="file-label"><i class="fas fa-cloud-upload-alt"></i></label>
                        <input type="file" name="img" id="file" class="file my-5">
                        <?php
                            if(isset( $imger)):  ?>
                           <?php     echo"<p class='text-danger'>" .$name_error."</p>";  ?>
                           <?php  endif;
                        ?>
                    
                    </div>
                    
                    
                    <div class="group">
                        <input type="submit" name="change_photo" value="ndrysho emrin" class="btn btn-danger  btn-signup" >
                        
                    </div>
                    
</form>

