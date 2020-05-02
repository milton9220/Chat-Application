(function($){

    $('.sendmessage').submit(function(){

      var message=$('.message-input').val();

      $.ajax({

        url:"chat.php",
        type:"POST",
        data:{
          chatupdate:'',
          message:message
        },
        success:function(output){

          $('.message-input').val('');
        }

      });


      return false;
    });

  $(document).ready(function(){
    

     $('#reg').click(function(){

       var firstname= $('#registerInputf').val();
       var lastname=$('#registerInputl').val();
       var email=$('#registerInpute').val();
       var password=$('#registerInputp').val();

        var register="value";


        $.ajax({
               url  : "insert.php",
               type : "POST",
               data :{
                     register: register,
                     firstname:firstname,
                     lastname:lastname,
                     email:email,
                     password:password
                   },
              success: function(output){
                $('.success').html(output);
              }
        });


     });

     setInterval(function(){

            $.ajax({
                  url:"chat.php",
                  type:"POST",
                  data:{
                       update:''
                  },
                  success:function(result){
                    $('.chat-box').html(result);
                  }
            });

     },50)



  });



}(jQuery))
