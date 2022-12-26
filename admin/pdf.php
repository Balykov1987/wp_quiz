 <?php

/*
  Файл которые генерирует PDF файл 
  An Example PDF Report Using FPDF
  by Matt Doyle

  From "Create Nice-Looking PDFs with PHP and FPDF"
  http://www.elated.com/articles/create-nice-looking-pdfs-php-fpdf/
*/

require_once( "pdf/fpdf.php" );

// Начало конфигурации
$logoFile = "logo.png";
$logoXPos = 50;
$logoYPos = 10;
$logoWidth = 157;
$id_user = $_POST['user_id'];
$user_name = $_POST['user_name'];
$user_mail = $_POST['user_mail'];
$user_phone = $_POST['user_phone'];
$move_date = $_POST['move_date'];
$packing_used = $_POST['packing_used'];
$packing_address = $_POST['packing_address'];
$packing_bedrooms = $_POST['packing_bedrooms'];
$packing_info = $_POST['packing_info'];
$unpacking_used = $_POST['unpacking_used'];
$unpacking_address = $_POST['unpacking_address'];
$unpacking_bedrooms = $_POST['unpacking_bedrooms'];
$unpacking_boxes = $_POST['unpacking_boxes'];
$mounting_used = $_POST['mounting_used'];
$mounting_address = $_POST['mounting_address'];
$mounting_details = $_POST['mounting_details'];
$crating_used = $_POST['crating_used'];
$crating_address = $_POST['crating_address'];
$crating_details = $_POST['crating_details'];
$old_address = $_POST['old_address'];
$old_place = $_POST['old_place'];
$old_house_size = $_POST['old_house_size'];
$old_house_rooms = $_POST['old_house_rooms'];
$old_house_people = $_POST['old_house_people'];
$old_house_people_info = $_POST['old_house_people_info'];
$old_house_info = $_POST['old_house_info'];
$old_aparts_floor = $_POST['old_aparts_floor'];
$old_aparts_elevator = $_POST['old_aparts_elevator'];
$old_aparts_rooms = $_POST['old_aparts_rooms'];
$old_aparts_rooms_info = $_POST['old_aparts_rooms_info'];
$old_aparts_people = $_POST['old_aparts_people'];
$old_aparts_people_info = $_POST['old_aparts_people_info'];
$old_office_size = $_POST['old_office_size'];
$old_office_floor = $_POST['old_office_floor'];
$old_office_elevator = $_POST['old_office_elevator'];
$old_storage_size = $_POST['old_storage_size'];
$old_storage_info = $_POST['old_storage_info'];
$old_storage_floor = $_POST['old_storage_floor'];
$old_storage_elevator = $_POST['old_storage_elevator'];
$old_elevator_time = $_POST['old_elevator_time'];
$old_steps = $_POST['old_steps'];
$old_info = $_POST['old_info'];
$new_address = $_POST['new_address'];
$new_place = $_POST['new_place'];
$new_house_size = $_POST['new_house_size'];
$new_house_rooms = $_POST['new_house_rooms'];
$new_house_room_info    = $_POST['new_house_room_info'];
$new_house_people = $_POST['new_house_people'];
$new_house_people_info = $_POST['new_house_people_info'];
$new_storage_size = $_POST['new_storage_size'];
$new_storage_info = $_POST['new_storage_info'];
$new_storage_floor = $_POST['new_storage_floor'];
$new_storage_elevator = $_POST['new_storage_elevator'];
$new_office_size = $_POST['new_office_size'];
$new_office_floor = $_POST['new_office_floor'];
$new_aparts_floor = $_POST['new_aparts_floor'];
$new_office_elevator = $_POST['new_office_elevator'];
$new_aparts_elevator = $_POST['new_aparts_elevator'];
$new_aparts_rooms = $_POST['new_aparts_rooms'];
$new_aparts_room_info = $_POST['new_aparts_room_info'];
$new_aparts_people = $_POST['new_aparts_people'];
$new_aparts_people_info = $_POST['new_aparts_people_info'];
$new_elevator_time = $_POST['new_elevator_time'];
$new_steps = $_POST['new_steps'];
$new_steps_info = $_POST['new_steps_info'];
$planning_items = $_POST['planning_items'];
$planning_items_info = $_POST['planning_items_info'];
$special_items = $_POST['special_items'];
$anything_details = $_POST['anything_details'];
$price = $_POST['price'];

$pdf=new FPDF();



    $pdf->AddPage();

    // Логотип
    $pdf->Image( $logoFile );

    $pdf->SetFont('Arial','',12);
    
    if (!empty($user_name)) {
      $pdf->Cell(70, 10, "Name", 1, 0, 'C', $fill);
       $pdf->Cell(0, 10, $user_name, 1, 1, 'C', $fill );
     }
     if (!empty($user_mail)) {
         $pdf->Cell(70, 10, "Email", 1, 0, 'C', $fill);
         $pdf->Cell(0, 10, $user_mail, 1, 1, 'C', $fill );
     }
     if (!empty($user_phone)) {   
       $pdf->Cell(70, 10, "Phone", 1, 0, 'C', $fill);
       $pdf->Cell(0, 10, $user_phone, 1, 1, 'C', $fill );
     }
     if (!empty($move_date)) {
       $pdf->Cell(70, 10, "Move date", 1, 0, 'C', $fill);
       $pdf->Cell(0, 10, $move_date, 1, 1, 'C', $fill );
   }
     if (!empty($packing_used)) {
       $pdf->Cell(70, 10, "Packing used", 1, 0, 'C', $fill);
       $pdf->Cell(0, 10, $packing_used, 1, 1, 'C', $fill );
   }
     if (!empty($packing_address)) {
        $pdf->Cell(70, 10, "Packing address", 1, 0, 'C', $fill);
        $pdf->Cell(0, 10, $packing_address, 1, 1, 'C', $fill );
   }
     if (!empty($packing_bedrooms)) {
       $pdf->Cell(70, 10, "Packing bedrooms", 1, 0, 'C', $fill);
       $pdf->Cell(0, 10, $packing_bedrooms, 1, 1, 'C', $fill );
   }
     if (!empty($packing_info)) {
       $pdf->Cell(70, 10, "Packing info", 1, 0, 'C', $fill);
       $pdf->Cell(0, 10, $packing_info, 1, 1, 'C', $fill );
   }
     if (!empty($unpacking_boxes)) {
       $pdf->Cell(70, 10, "Unpacking used", 1, 0, 'C', $fill);
       $pdf->Cell(0, 10, $unpacking_boxes, 1, 1, 'C', $fill );
   }
     if (!empty($unpacking_address)) {
       $pdf->Cell(70, 10, "Unpacking address", 1, 0, 'C', $fill);
       $pdf->Cell(0, 10, $unpacking_address, 1, 1, 'C', $fill );
   }
     if (!empty($unpacking_bedrooms)) {
     $pdf->Cell(70, 10, "Unpacking bedrooms", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $unpacking_bedrooms, 1, 1, 'C', $fill );
   }
     if (!empty($unpacking_boxes)) {
     $pdf->Cell(70, 10, "Unpacking boxes", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $unpacking_boxes, 1, 1, 'C', $fill );
   }
     if (!empty($mounting_used)) {
     $pdf->Cell(70, 10, "mounting used", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $mounting_used, 1, 1, 'C', $fill );
   }
     if (!empty($mounting_address)) {
     $pdf->Cell(70, 10, "Mounting address", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $mounting_address, 1, 1, 'C', $fill );
   }
     if (!empty($mounting_details)) {
     $pdf->Cell(70, 10, "Mounting details", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $mounting_details, 1, 1, 'C', $fill );
   }
     if (!empty($crating_used)) {
     $pdf->Cell(70, 10, "Crating used", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $crating_used, 1, 1, 'C', $fill );
   }
     if (!empty($crating_address)) {
     $pdf->Cell(70, 10, "Crating address", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $crating_address, 1, 1, 'C', $fill );
   }
     if (!empty($crating_details)) {
     $pdf->Cell(70, 10, "Crating details", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $crating_details, 1, 1, 'C', $fill );
   }
     if (!empty($old_address)) {
     $pdf->Cell(70, 10, "Current address", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_address, 1, 1, 'C', $fill );
   }
     if (!empty($old_place)) {
     $pdf->Cell(70, 10, "Current place", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_place, 1, 1, 'C', $fill );
   }
     if (!empty($old_house_size)) {
     $pdf->Cell(70, 10, "Current house: size", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_house_size, 1, 1, 'C', $fill );
   }
     if (!empty($old_house_rooms)) {
     $pdf->Cell(70, 10, "Current house: rooms", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_house_rooms, 1, 1, 'C', $fill );
   }
    if (!empty($old_house_info)) {
     $pdf->Cell(70, 10, "Current house: rooms info", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_house_info, 1, 1, 'C', $fill );
   }
     if (!empty($old_house_people)) {
     $pdf->Cell(70, 10, "Current house: people", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_house_people, 1, 1, 'C', $fill );
   }
     if (!empty($old_house_people_info)) {
     $pdf->Cell(70, 10, "Current house: people info", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_house_people_info, 1, 1, 'C', $fill );
   }     
     if (!empty($old_aparts_floor)) {
     $pdf->Cell(70, 10, "Current appartments: floor", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_aparts_floor, 1, 1, 'C', $fill );
   }
     if (!empty($old_aparts_elevator)) {
     $pdf->Cell(70, 10, "Current appartments: elevator", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_aparts_elevator, 1, 1, 'C', $fill );
   }
     if (!empty($old_aparts_rooms)) {
     $pdf->Cell(70, 10, "Current appartments: rooms", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_aparts_rooms, 1, 1, 'C', $fill );
   }
     if (!empty($old_aparts_rooms_info)) {
     $pdf->Cell(70, 10, "Current appartments: rooms info", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_aparts_rooms_info, 1, 1, 'C', $fill );
   }
     if (!empty($old_aparts_people)) {
     $pdf->Cell(70, 10, "Current appartments: people", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_aparts_people, 1, 1, 'C', $fill );
   }
     if (!empty($old_aparts_people_info)) {
     $pdf->Cell(70, 10, "Current appartments: people info", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_aparts_people_info, 1, 1, 'C', $fill );
   }
     if (!empty($old_office_size)) {
     $pdf->Cell(70, 10, "Current office: size", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_office_size, 1, 1, 'C', $fill );
   }
     if (!empty($old_office_floor)) {
       $pdf->Cell(70, 10, "Current office: floor", 1, 0, 'C', $fill);
       $pdf->Cell(0, 10, $old_office_floor, 1, 1, 'C', $fill );
   }
     if (!empty($old_office_elevator)) {
       $pdf->Cell(70, 10, "Current office: elevator", 1, 0, 'C', $fill);
       $pdf->Cell(0, 10, $old_office_elevator, 1, 1, 'C', $fill );
   }
     if (!empty($old_storage_size)) {
     $pdf->Cell(70, 10, "Current storage: size", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_storage_size, 1, 1, 'C', $fill );
   }
     if (!empty($old_storage_info)) {
     $pdf->Cell(70, 10, "Current storage: size info", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_storage_info, 1, 1, 'C', $fill );
   }
     if (!empty($old_storage_floor)) {
     $pdf->Cell(70, 10, "Current storage: floor", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_storage_floor, 1, 1, 'C', $fill );
   }
     if (!empty($old_storage_elevator)) {
     $pdf->Cell(70, 10, "Current storage: elevator", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_storage_elevator, 1, 1, 'C', $fill );
     }
     if (!empty($old_elevator_time)) {
     $pdf->Cell(70, 10, "Current address: elevator restrictions", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_elevator_time, 1, 1, 'C', $fill );
     }
     if (!empty($old_steps)) {
     $pdf->Cell(70, 10, "Current address: steps to top floor", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_steps, 1, 1, 'C', $fill );
     }
     if (!empty($old_info)) {
     $pdf->Cell(70, 10, "Current address: steps info", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $old_info, 1, 1, 'C', $fill );
     }
     if (!empty($new_address)) {
     $pdf->Cell(70, 10, "New address", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $new_address, 1, 1, 'C', $fill );
   }
     if (!empty($new_place)) {
     $pdf->Cell(70, 10, "New place", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $new_place, 1, 1, 'C', $fill );
   }
     if (!empty($new_house_size)) {
     $pdf->Cell(70, 10, "New house: size", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $new_house_size, 1, 1, 'C', $fill );
   }
     if (!empty($new_house_rooms)) {
     $pdf->Cell(70, 10, "New house: rooms", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $new_house_rooms, 1, 1, 'C', $fill );
   }
     if (!empty($new_house_room_info)) {
     $pdf->Cell(70, 10, "New house: rooms info", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $new_house_room_info, 1, 1, 'C', $fill );
   }
     if (!empty($new_house_people)) {
     $pdf->Cell(70, 10, "New house: people", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $new_house_people, 1, 1, 'C', $fill );
   }
     if (!empty($new_house_people_info)) {
     $pdf->Cell(70, 10, "New house: people info", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $new_house_people_info, 1, 1, 'C', $fill );
   }
     if (!empty($new_storage_size)) {
     $pdf->Cell(70, 10, "New storage: size", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $new_storage_size, 1, 1, 'C', $fill );
   }
     if (!empty($new_storage_info)) {
     $pdf->Cell(70, 10, "New storage: size info", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $new_storage_info, 1, 1, 'C', $fill );
   }
     if (!empty($new_storage_floor)) {
     $pdf->Cell(70, 10, "New storage: floor", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $new_storage_floor, 1, 1, 'C', $fill );
   }
     if (!empty($new_storage_elevator)) {
     $pdf->Cell(70, 10, "New storage: elevator", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $new_storage_elevator, 1, 1, 'C', $fill );
   }
     if (!empty($new_office_size)) {
     $pdf->Cell(70, 10, "New office: size", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $new_office_size, 1, 1, 'C', $fill );
   }
     if (!empty($new_office_floor)) {
     $pdf->Cell(70, 10, "New office: floor", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $new_office_floor, 1, 1, 'C', $fill );
   }
     if (!empty($new_office_elevator)) {
     $pdf->Cell(70, 10, "New office: elevator", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $new_office_elevator, 1, 1, 'C', $fill );
   }
   if (!empty($new_aparts_floor)) {
    $pdf->Cell(70, 10, "New appartments: floor", 1, 0, 'C', $fill);
    $pdf->Cell(0, 10, $new_aparts_floor, 1, 1, 'C', $fill );
  }
     if (!empty($new_aparts_elevator)) {
     $pdf->Cell(70, 10, "New appartments: elevator", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $new_aparts_elevator, 1, 1, 'C', $fill );
   }
     if (!empty($new_aparts_rooms)) {
     $pdf->Cell(70, 10, "New appartments: rooms", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $new_aparts_rooms, 1, 1, 'C', $fill );
   }
     if (!empty($new_aparts_room_info)) {
     $pdf->Cell(70, 10, "New appartments: rooms info", 1, 0, 'C', $fill);
     $pdf->MultiCell(0, 10, $new_aparts_room_info, 1 );
   }
     if (!empty($new_aparts_people)) {
     $pdf->Cell(70, 10, "New appartments: people", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10, $new_aparts_people, 1, 1, 'C', $fill );
   }
     if (!empty($new_aparts_people_info)) {
     $pdf->Cell(70, 10, "New appartments: people info", 1, 0, 'C', $fill);
     $pdf->MultiCell(0, 10, $new_aparts_people_info, 1 );
   }
     if (!empty($new_elevator_time)) {
     $pdf->Cell(70, 10, "New address: elevator restrictions", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10,  $new_elevator_time, 1, 1, 'C', $fill );
   }
     if (!empty($new_steps)) {
     $pdf->Cell(70, 10, "New address: steps to top floor", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10,  $new_steps, 1, 1, 'C', $fill );
   }
     if (!empty($new_steps_info)) {
     $pdf->Cell(70, 10, "New address: steps info", 1, 0, 'C', $fill);
     $pdf->MultiCell(0, 10,  $new_steps_info, 1 );
   }
     if (!empty($planning_items)) {
     $pdf->Cell(70, 10, "Planned items", 1, 0, 'C', $fill);
     $pdf->MultiCell(0, 10,  $planning_items, 1 );
   }
     if (!empty($planning_items_info)) {
     $pdf->Cell(70, 10, "Planned items info", 1, 0, 'C', $fill);
     $pdf->MultiCell(0, 10,  $planning_items_info, 1 );
   }
     if (!empty($special_items)) {
      $pdf->SetFont( 'Arial', '', 12 );
     $pdf->Cell(70, 10, "Special care items", 1, 0, 'C', $fill);
     $pdf->MultiCell(0, 10,  $special_items, 1 );
   }
     if (!empty($anything_details)) {
     $pdf->Cell(70, 10, "Additional info", 1, 0, 'C', $fill);
     $pdf->MultiCell(0, 10,  $anything_details, 1 );
     }
     if (!empty($price)) {
     $pdf->Cell(70, 10, "Price", 1, 0, 'C', $fill);
     $pdf->Cell(0, 10,  $price, 1, 1, 'C', $fill );
   }



/***        
  Выводим PDF
***/

$pdf->Output( 'pdf-uploads/' . $id_user . '.pdf', "F" );


/**
  * I : Выводить PDF на экран, если такая функция поддерживается браузером, иначе загружать.

  * D : Загружать PDF.

  * F : Сохранять файл в папке на сервере.

  * S : Возвращать данные PDF как строку.
 */

?>

