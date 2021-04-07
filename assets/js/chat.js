$(document).ready(function(){
    
        
    $(".chat-form").keypress(function(e){
        if(e.keyCode==13){
            var send_message=$("#send_message").val();
            
            if(send_message.length!=""){
              
               $.ajax({
                   type :'POST',
                   url :'ajax/send_message.php',
                   data :{send_message1 : send_message },
                   dataType: 'JSON',
                success: function(feedback){
                       if(feedback.status=="success"){
                       $("#chat-form").trigger("reset");
                       show_message();
                  }
                      
                  }
              } )
             
            }
            else  {
                alert("su be");}
         
            }
        
            
       
    })  
    
    $("#upload-files").change(function(){
        var file_name=$("#upload-files").val();
        if(file_name.length !=""){
            $.ajax({
                type: 'POST',
                url:'ajax/send_files.php',
                data: new FormData($(".chat-form")[0]),
                contentType: false,
                processData: false,
                success:function(feedback){
                   
                    if(feedback == "error"){
                            alert("vendosni file ne formatin e duhur");
                    }
                    else if(feedback =="success"){
                        show_message();
                    }
                   
                   
                }
            })
        }
     

    })
    $(".emoji-same").click(function(){
        var emoji=$(this).attr("src");
        
            $.ajax({
                type: 'POST',
                url:'ajax/send_emoji.php',
                data: {'send_emoji':emoji},
                dataType :'JSON',
                success:function(feedback){
                   if(feedback.status=="success"){

                   
                 
                }
                   
                }
            })
        
     

    })
    setInterval(function(){
        show_message();
    },3000);
    })
    function show_message(){
        var msg=true;
        $.ajax({
            type:'POST',
            url:'ajax/show_message.php',
            data:{'message':msg},
            success: function(feedback){
                $(".messages").html(feedback);
            }
        })
    }
    show_message();