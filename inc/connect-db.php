<?php

if (isset($_POST['submitbtn'])) {
    if (isset($_POST['planning_items'])) {
        $planning_items = implode(",", $_POST["planning_items"]);
    }
    $data = array(
            'name' => $_POST['user_name'] ?? '',
            'phone' => $_POST['user_phone'] ?? '',            
            'mail' => $_POST['user_mail'] ?? '',
            'date' => $_POST['move_date'] ?? '',
            'packing_used' => $_POST['packing_used'] ?? '',
            'packing_address' => $_POST['packing_address'] ?? '',
            'packing_bedrooms' => $_POST['packing_bedroom'] ?? '',
            'packing_info' => $_POST['packing_info'] ?? '',
            'unpacking_used' => $_POST['unpacking_used'] ?? '',
            'unpacking_address' => $_POST['unpacking_address'] ?? '',
            'unpacking_bedrooms' => $_POST['unpacking_bedroom'] ?? '',
            'unpacking_boxes' => $_POST['unpacking_boxes'] ?? '',
            'mounting_used' => $_POST['mounting_used'] ?? '',
            'mounting_address' => $_POST['mounting_address'] ?? '',
            'mounting_details' => $_POST['mounting_details'] ?? '',
            'crating_used' => $_POST['crating_used'] ?? '',
            'crating_address' => $_POST['crating_address'] ?? '',
            'crating_details' => $_POST['crating_details'] ?? '',
            'old_address' => $_POST['old_address'] ?? '',
            'old_place' => $_POST['old_place'] ?? '',
            'old_house_size' => $_POST['size_of_house'] ?? '',
            'old_house_rooms' => $_POST['house_rooms'] ?? '',
            'old_house_info' => $_POST['old_house_info'] ?? '',
            'old_house_people' => $_POST['old_house_people'] ?? '',
            'old_house_people_info' => $_POST['old_house_people_info'] ?? '',
            'old_aparts_floor' => $_POST['old_aparts_floor'] ?? '',
            'old_aparts_elevator' => $_POST['elevator_in_aparts'] ?? '',
            'old_aparts_rooms' => $_POST['old_aparts_rooms'] ?? '',
            'old_aparts_rooms_info' =>$_POST['old_aparts_rooms_info'] ?? '',
            'old_aparts_people' =>$_POST['old_aparts_people'] ?? '',
            'old_aparts_people_info' =>$_POST['old_aparts_people_info'] ?? '',
            'old_office_size' =>$_POST['old_office_size'] ?? '',
            'old_office_floor' =>$_POST['old_office_floor'] ?? '',
            'old_office_elevator' =>$_POST['elevator_in_office'] ?? '',
            'old_storage_size' =>$_POST['old_storage_size'] ?? '',
            'old_storage_info' =>$_POST['old_storage_info'] ?? '',
            'old_storage_floor' =>$_POST['old_storage_floor'] ?? '',
            'old_storage_elevator' =>$_POST['elevator_in_storage'] ?? '',
            'old_elevator_time' =>$_POST['old_elevator_time'] ?? '',
            'old_steps' =>$_POST['old_steps'] ?? '',
            'old_info' =>$_POST['old_info'] ?? '',
            'new_address' =>$_POST['new_address'] ?? '',
            'new_place' =>$_POST['new_place'] ?? '',
            'new_house_size' =>$_POST['new_house_size'] ?? '',
            'new_house_rooms' =>$_POST['new_house_rooms'] ?? '',
            'new_house_room_info' =>$_POST['new_house_room_info'] ?? '',
            'new_house_people' =>$_POST['new_house_people'] ?? '',
            'new_house_people_info' =>$_POST['new_house_people_info'] ?? '',
            'new_storage_size' =>$_POST['new_storage_size'] ?? '',
            'new_storage_info' =>$_POST['new_storage_info'] ?? '',
            'new_storage_floor' =>$_POST['new_storage_floor'] ?? '',
            'new_storage_elevator' =>$_POST['new_storage_elevator'] ?? '',
            'new_office_size' =>$_POST['new_office_size'] ?? '',
            'new_office_floor' =>$_POST['new_office_floor'] ?? '',
            'new_office_elevator' =>$_POST['new_office_elevator'] ?? '',
            'new_aparts_floor' =>$_POST['new_aparts_floor'] ?? '',
            'new_aparts_elevator' =>$_POST['new_aparts_elevator'] ?? '',
            'new_aparts_rooms' =>$_POST['new_aparts_rooms'] ?? '',
            'new_aparts_room_info' =>$_POST['new_aparts_room_info'] ?? '',
            'new_aparts_people' =>$_POST['new_aparts_people'] ?? '',
            'new_aparts_people_info' =>$_POST['new_aparts_people_info'] ?? '',
            'new_elevator_time' =>$_POST['new_elevator_time'] ?? '',
            'new_floor' =>$_POST['new_floor'] ?? '',
            'new_steps' =>$_POST['new_steps'] ?? '',
            'new_steps_info' =>$_POST['new_steps_info'] ?? '',
            'planning_items' => $planning_items ?? '',
            'planning_items_info' =>$_POST['planning_items_info'] ?? '',
            'special_items' =>$_POST['special_items'] ?? '',
            'anything_details' =>$_POST['anything_details'] ?? '',
    );
    $table_name = 'wp_mover';

    //var_dump($data);

    $result = $wpdb->insert(
            $table_name, $data, $format=NULL
    );

    if ($result===1) {
        header('location: https://meetinghousemovers.directline.company/thank-you/');
        die;
    }
}