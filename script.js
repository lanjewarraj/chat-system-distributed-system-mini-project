
     $("#send-chat").on("submit", function (e) {
         e.preventDefault();
         var name = document.getElementById("#username");
         var msg = document.getElementById("#message");
         if(name=='' || msg==""){
             alert("please enter your name,message");
         }
         $.ajax({
             url: "insert.php",
             data: $("#send-chat").serialize(),
             type: "post",
             success: function (res) {
                 $("#res").html(res);
             }
         })
     })

     $.ajax({
         cache: false
     });
     setInterval(function () {
         $("#res").load("display.php");
     }, 2000);