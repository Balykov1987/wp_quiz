jQuery(document).ready(function(){
  let $ = jQuery; // это для того чтоб wordpress не ругался на $

    $('.send__to__pdf').click(function(){  
      // собираем данные с формы

    //   let pdfSend = document.querySelectorAll('.send__to__client');
    // let form = document.getElementsByTagName('form');

    // pdfSend.forEach(button => {
    //     button.addEventListener('click', function(){
      //$('form').submit(function () {
        let formID = $(this).attr('id'); // Получение ID формы
        let formNm = $('#' + formID);
        let user_id     = $('#user_id').val();
        let user_name   = $('#user_name').val();
        let user_mail   = $('#user_mail').val();
        let user_phone  = $('#user_phone').val();
        let move_date   = $('#move_date').val();
        let packing_used   = $('#packing_used').val();
        let packing_address   = $('#packing_address').val();
        let packing_bedrooms  = $('#packing_bedrooms').val();
        let packing_info      = $('#packing_info').val();
        let unpacking_used = $('#unpacking_used').val();
        let unpacking_address = $('#unpacking_address').val();
        let unpacking_bedrooms = $('#unpacking_bedrooms ').val();
        let unpacking_boxes      = $('#unpacking_boxes').val();
        let mounting_used      = $('#mounting_used').val();
        let mounting_address      = $('#mounting_address').val();
        let mounting_details      = $('#mounting_details').val();
        let crating_used      = $('#crating_used').val();
        let crating_address      = $('#crating_address').val();
        let crating_details      = $('#crating_details').val();
        let old_place      = $('#old_place').val();
        let old_address      = $('#old_address').val();
        let old_house_size     = $('#old_house_size').val();
        let old_house_rooms      = $('#old_house_rooms').val();
        let old_house_people      = $('#old_house_people').val();
        let old_house_people_info      = $('#old_house_people_info').val();
        let old_aparts_floor     = $('#old_aparts_floor').val();
        let old_house_info      = $('#old_house_info').val();
        let old_aparts_elevator      = $('#old_aparts_elevator').val();
        let old_aparts_rooms      = $('#old_aparts_rooms').val();
        let old_aparts_rooms_info      = $('#old_aparts_rooms_info').val();
        let old_aparts_people      = $('#old_aparts_people').val();
        let old_aparts_people_info      = $('#old_aparts_people_info').val();
        let old_office_size      = $('#old_office_size').val();
        let old_office_floor      = $('#old_office_floor').val();
        let old_office_elevator      = $('#old_office_elevator').val();
        let old_storage_size     = $('#old_storage_size').val();
        let old_storage_info      = $('#old_storage_info').val();
        let old_storage_floor     = $('#old_storage_floor').val();
        let old_storage_elevator      = $('#old_storage_elevator').val();
        let old_elevator_time      = $('#old_elevator_time').val();
        let old_steps      = $('#old_steps').val();
        let old_info      = $('#old_info').val();
        let new_address      = $('#new_address').val();
        let new_place      = $('#new_place').val();
        let new_house_size     = $('#new_house_size').val();
        let new_house_rooms      = $('#new_house_rooms').val();
        let new_house_room_info      = $('#new_house_room_info').val();
        let new_house_people      = $('#new_house_people').val();
        let new_house_people_info      = $('#new_house_people_info').val();
        let new_storage_size     = $('#new_storage_size').val();
        let new_storage_info     = $('#new_storage_info').val();
        let new_storage_floor      = $('#new_storage_floor').val();
        let new_storage_elevator      = $('#new_storage_elevator').val();
        let new_office_size    = $('#new_office_size').val();
        let new_office_floor      = $('#new_office_floor').val();
        let new_office_elevator     = $('#new_office_elevator').val();
        let new_aparts_floor = $('#new_aparts_floor').val();
        let new_aparts_elevator      = $('#new_aparts_elevator').val();
        let new_aparts_rooms      = $('#new_aparts_rooms').val();
        let new_aparts_room_info      = $('#new_aparts_room_info').val();
        let new_aparts_people      = $('#new_aparts_people').val();
        let new_aparts_people_info      = $('#new_aparts_people_info').val();
        let new_elevator_time = $('#new_aparts_people_info').val();
        let new_steps = $('#new_steps').val();
        let new_steps_info = $('#new_steps_info').val();
        let planning_items = $('#planning_items').val();
        let planning_items_info = $('#planning_items_info').val();
        let special_items = $('#special_items').val();
        let anything_details = $('#anything_details').val();
        let price = $('#price').val();

      


  
      console.log(new_office_floor);
  
      // отправляем данные
      $.ajax({
        url: "/wp-content/themes/shifters-pro/quiz/admin/pdf.php", // куда отправляем
        type: "post", // метод передачи
        cache: false,
        dataType: "json", // тип передачи данных
        data: { // что отправляем
          "user_id": user_id,
          "user_name": user_name,
          "user_mail": user_mail,
          "user_phone": user_phone,
          "move_date": move_date,
          "packing_used": packing_used,
          "packing_address": packing_address,
          "packing_bedrooms": packing_bedrooms,
          "packing_info": packing_info,
          "unpacking_used": unpacking_used,
          "unpacking_address": unpacking_address,
          "unpacking_bedrooms": unpacking_bedrooms,
          "unpacking_boxes": unpacking_boxes,
          "mounting_used": mounting_used,
          "mounting_address": mounting_address,
          "mounting_details": mounting_details,
          "crating_used": crating_used,
          "crating_address": crating_address,
          "crating_details": crating_details,
          "old_address": old_address,
          "old_place": old_place,
          "old_house_size": old_house_size,
          "old_house_rooms": old_house_rooms,
          "old_house_people": old_house_people,
          "old_house_people_info": old_house_people_info,
          "old_house_info": old_house_info,
          "old_aparts_floor": old_aparts_floor,
          "old_aparts_elevator": old_aparts_elevator,
          "old_aparts_rooms": old_aparts_rooms,
          "old_aparts_rooms_info": old_aparts_rooms_info,
          "old_aparts_people": old_aparts_people,
          "old_aparts_people_info": old_aparts_people_info,
          "old_office_size": old_office_size,
          "old_office_floor": old_office_floor,
          "old_office_elevator": old_office_elevator,
          "old_storage_size": old_storage_size,
          "old_storage_info": old_storage_info,
          "old_storage_floor": old_storage_floor,
          "old_storage_elevator": old_storage_elevator,
          "old_elevator_time": old_elevator_time,
          "old_steps": old_steps,
          "old_info": old_info,
          "new_address": new_address,
          "new_place": new_place,
          "new_house_size": new_house_size,
          "new_house_rooms": new_house_rooms,
          "new_house_room_info": new_house_room_info,
          "new_house_people": new_house_people,
          "new_house_people_info": new_house_people_info,
          "new_storage_size": new_storage_size,
          "new_storage_info": new_storage_info,
          "new_storage_floor": new_storage_floor,
          "new_storage_elevator": new_storage_elevator,
          "new_office_size": new_office_size,
          "new_office_floor": new_office_floor,
          "new_office_elevator": new_office_elevator,
          "new_aparts_floor": new_aparts_floor,
          "new_aparts_elevator": new_aparts_elevator,
          "new_aparts_rooms": new_aparts_rooms,
          "new_aparts_room_info": new_aparts_room_info,
          "new_aparts_people": new_aparts_people,
          "new_aparts_people_info": new_aparts_people_info,
          "new_elevator_time":new_elevator_time,
          "new_steps":new_steps,
          "new_steps_info":new_steps_info,
          "planning_items":planning_items,
          "planning_items_info":planning_items_info,
          "special_items":special_items,
          "anything_details":anything_details,
          "price":price,
           
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