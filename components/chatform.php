<form  class="chat-form" id="chat-form" enctype="multipart/form-data">
            
            <div class="form-input">
                <textarea class="textarea-control" id="send_message" placeholder="type your message"></textarea>
            </div>
            <div class="form-input d-flex">
                <label for="upload-files" id="upload-label">
                     <i class="fas fa-paperclip fa-uploads"></i> <i class="fas fa-file-image fa-uploads"></i>
                </label>
                <input type="file" id="upload-files" name="send_file" class="files-upload">
                <div class="emoji ">
                    <img src="assets/emoji/emoji1.png"  class="emoji-same" alt="">
                    <img src="assets/emoji/emoji2.png" class="emoji-same" alt="">
                </div>
                <?php if(isset($_SESSION['receiver'])): ?>

<h1><?php echo ucfirst($_SESSION['receiver']);?></h1>
<?php
endif;
?>
<?php
unset($_SESSION['receiver']);
?> 
            </div>
          
</form>
        
   