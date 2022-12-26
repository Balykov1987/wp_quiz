// Файл который обрабатывает данные и передает в файл send-to-client.php
jQuery(document).ready(function(){
    let $ = jQuery; // это для того чтоб wordpress не ругался на $
  
      $('.send__to__client').click(function(){  
        // собираем данные с формы
  
      //   let pdfSend = document.querySelectorAll('.send__to__client');
      // let form = document.getElementsByTagName('form');
  
      // pdfSend.forEach(button => {
      //     button.addEventListener('click', function(){
        //$('form').submit(function () {
        //let formID = $(this).attr('id'); // Получение ID формы
        //let formNm = $('#' + formID);
          let user_id     = $('#user_id').val();
          let user_name   = $('#user_name').val();
          let user_mail   = $('#user_mail').val();
          let user_phone  = $('#user_phone').val();
               
  
  
    
        console.log(user_phone);
    
        // отправляем данные
        $.ajax({
          url: "/wp-content/themes/shifters-pro/quiz/admin/send-to-client.php", // куда отправляем
          type: "post", // метод передачи
          cache: false,
          dataType: "json", // тип передачи данных
          data: { // что отправляем
            "user_id": user_id,
            "user_name": user_name,
            "user_mail": user_mail,
            "user_phone": user_phone,             
        },  
        // после получения ответа сервера
  
        success: function(data){
  
          console.log(data);
          $('.messages').html(data.result); // выводим ответ сервера
          //$("#submit").prop("disabled", true);
          //setTimeout(function () { window.location.reload(); }, 1500);
        }
      });
    }); 
  }) 
  //});