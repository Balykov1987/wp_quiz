jQuery(document).ready(function(){
  var $ = jQuery; // это для того чтоб wordpress не ругался на $
$("form")(function(event) {
    $('.send__to__pdf').click(function(){ 
    

      
      
      
          // собираем данные с формы
      var user_id     = $('#user_id').val();
      var user_name     = $('#user_name').val();
      


  
      console.log(user_id);
  
      // отправляем данные
      $.ajax({
        url: "/wp-content/themes/shifters-pro/quiz/admin/pdf.php", // куда отправляем
        type: "post", // метод передачи
        cache: false,
        dataType: "json", // тип передачи данных
        data: { // что отправляем
          "user_name": user_name,
          "user_id": user_id,
        },  
      // после получения ответа сервера

      success: function(data){
        //console.log(data);
        $('.messages').html(data.result); // выводим ответ сервера
        //$("#submit").prop("disabled", true);
        //setTimeout(function () { window.location.reload(); }, 1500);
        }
      });


       

    })



});
    
});