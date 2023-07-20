    

    
    <script>
         $(document).ready(function(){



// messages

            setInterval(function(){
                $.post("function/messages_counter.php" , {data: 'get'} , function(data){



                    if (data > 0) {

                        $(".spancounter").show();
                        $(".spancounter").text(data);

                    }
                });
            },1000);


            $('.readmessage').click(function(){

                $(this).parent().prev().text('seen ');

                var id = $(this).attr("message_id");

                $.post("function/messages_counter.php" , {update : "update",id : id} , function(data){

                    console.log(data);

                });
            });

//  /messages





         });








     </script>

