<?php
// Load WordPress
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );
$result = Moverquiz_Admin::get_estimates();

?>
<div class="wrap">
    <h1>Quiz page</h1>
<div class="messages"></div>

<div class="forms-wrap">

<?php foreach($result as $item) :
     $id = $item->id;?>

        <form role="form" id="form-<?php echo $id;?>" action="<?php echo admin_url( 'admin-post.php' )?>" method="post">

            <div id="invoice" class="table-wrap">

                <div  class="head-table">
                    <div class="head-table__left">
                        Order # <?php echo $id;?>
                    </div>

                </div>

                <div class="body-table">
                    <table >     
                        <tr>
                            <td><strong>Name</strong></td>
                            <td>
                                <input id="user_id" type="hidden" name="user_id" value="<?php echo $item->id;?>" placeholder="<?php echo $item->id;?>">
                                <input id="user_name" type="text" name="user_name" value="<?php echo $item->name;?>" placeholder="<?php echo $item->name;?>">
                            </td>  
                        </tr>
                        <tr>
                        <td><strong>Email</strong></td>
                            <td>
                                <input id="user_mail" type="text" name="user_mail" value="<?php echo $item->mail;?>" placeholder="<?php echo $item->mail;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Phone</strong></td>
                            <td>
                                <input id="user_phone" type="text" name="user_phone" value="<?php echo $item->phone;?>" placeholder="<?php echo $item->phone;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Move date</strong></td>
                            <td>
                                <input id="move_date" type="text" name="move_date" value="<?php echo $item->date;?>" placeholder="<?php echo $item->date;?>">
                            </td>  
                        </tr>
                        <tr>
                        <td><strong>Packing used</strong></td>
                            <td>
                                <input id="packing_used" type="text" name="packing_used" value="<?php echo $item->packing_used;?>" placeholder="<?php echo $item->packing_used;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Packing address</strong></td>
                            <td>
                                <input id="packing_address" type="text" name="packing_address" value="<?php echo $item->packing_address;?>" placeholder="<?php echo $item->packing_address;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Packing bedrooms</strong></td>
                            <td>
                                <input id="packing_bedrooms" type="text" name="packing_bedrooms" value="<?php echo $item->packing_bedrooms;?>" placeholder="<?php echo $item->packing_bedrooms;?>">
                            </td>  
                        </tr>
                        <tr>
                        <td><strong>Packing info</strong></td>
                            <td>
                                <input id="packing_info" type="text" name="packing_info" value="<?php echo $item->packing_info;?>" placeholder="<?php echo $item->packing_info;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Unpacking used</strong></td>
                            <td>
                                <input id="unpacking_used" type="text" name="unpacking_used" value="<?php echo $item->unpacking_used;?>" placeholder="<?php echo $item->unpacking_used;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Unpacking address</strong></td>
                            <td>
                                <input id="unpacking_address" type="text" name="unpacking_address" value="<?php echo $item->unpacking_address;?>" placeholder="<?php echo $item->unpacking_address;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Unpacking bedrooms</strong></td>
                            <td>
                                <input id="unpacking_bedrooms" type="text" name="unpacking_bedrooms" value="<?php echo $item->unpacking_bedrooms;?>" placeholder="<?php echo $item->unpacking_bedrooms;?>">
                            </td>  
                        </tr>
                        <tr>
                        <td><strong>Unpacking boxes</strong></td>
                            <td>
                                <input id="unpacking_boxes" type="text" name="unpacking_boxes" value="<?php echo $item->unpacking_boxes;?>" placeholder="<?php echo $item->unpacking_boxes;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Mounting used</strong></td>
                            <td>
                                <input id="mounting_used" type="text" name="mounting_used" value="<?php echo $item->mounting_used;?>" placeholder="<?php echo $item->mounting_used;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Mounting address</strong></td>
                            <td>
                                <input id="mounting_address" type="text" name="mounting_address" value="<?php echo $item->mounting_address;?>" placeholder="<?php echo $item->mounting_address;?>">
                            </td>  
                        </tr>
                        <tr>
                        <td><strong>Mounting details</strong></td>
                            <td>
                                <input id="mounting_details" type="text" name="mounting_details" value="<?php echo $item->mounting_details;?>" placeholder="<?php echo $item->mounting_details;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Crating used</strong></td>
                            <td>
                                <input id="crating_used" type="text" name="crating_used" value="<?php echo $item->crating_used;?>" placeholder="<?php echo $item->crating_used;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Crating address</strong></td>
                            <td>
                                <input id="crating_address" type="text" name="crating_address" value="<?php echo $item->crating_address;?>" placeholder="<?php echo $item->crating_address;?>">
                            </td>  
                        </tr>
                        <tr>
                            <td><strong>Crating details</strong></td>
                            <td>
                                <input id="crating_details" type="text" name="crating_details" value="<?php echo $item->crating_details;?>" placeholder="<?php echo $item->crating_details;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current address</strong></td>
                            <td>
                                <input id="old_address" type="text" name="old_address" value="<?php echo $item->old_address;?>" placeholder="<?php echo $item->old_address;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current place</strong></td>
                            <td>
                                <input id="old_place" type="text" name="old_place" value="<?php echo $item->old_place;?>" placeholder="<?php echo $item->old_place;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current house: size</strong></td>
                            <td>
                                <input id="old_house_size" type="text" name="old_house_size" value="<?php echo $item->old_house_size;?>" placeholder="<?php echo $item->old_house_size;?>">
                            </td>  
                        </tr>
                        <tr>
                            <td><strong>Current house: rooms</strong></td>
                            <td>
                                <input id="old_house_rooms" type="text" name="old_house_rooms" value="<?php echo $item->old_house_rooms;?>" placeholder="<?php echo $item->old_house_rooms;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current house: rooms info</strong></td>
                            <td>
                                <input id="old_house_info" type="text" name="old_house_info" value="<?php echo $item->old_house_info;?>" placeholder="<?php echo $item->old_house_info;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current house: people</strong></td>
                            <td>
                                <input id="old_house_people" type="text" name="old_house_people" value="<?php echo $item->old_house_people;?>" placeholder="<?php echo $item->old_house_people;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current house: people info</strong></td>
                            <td>
                                <input id="old_house_people_info" type="text" name="old_house_people_info" value="<?php echo $item->old_house_people_info;?>" placeholder="<?php echo $item->old_house_people_info;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current appartments: floor</strong></td>
                            <td>
                                <input id="old_aparts_floor" type="text" name="old_aparts_floor" value="<?php echo $item->old_aparts_floor;?>" placeholder="<?php echo $item->old_aparts_floor;?>">    
                            </td>
                        </tr>
                        
                        <tr>
                            <td><strong>Current appartments: elevator</strong></td>
                            <td>
                                <input id="old_aparts_elevator" type="text" name="old_aparts_elevator" value="<?php echo $item->old_aparts_elevator;?>" placeholder="<?php echo $item->old_aparts_elevator;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current appartments: rooms</strong></td>
                            <td>
                                <input id="old_aparts_rooms" type="text" name="old_aparts_rooms" value="<?php echo $item->old_aparts_rooms;?>" placeholder="<?php echo $item->old_aparts_rooms;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current appartments: rooms info</strong></td>
                            <td>
                                <input id="old_aparts_rooms_info" type="text" name="old_aparts_rooms_info" value="<?php echo $item->old_aparts_rooms_info;?>" placeholder="<?php echo $item->old_aparts_rooms_info;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current appartments: people</strong></td>
                            <td>
                                <input id="old_aparts_people" type="text" name="old_aparts_people" value="<?php echo $item->old_aparts_people;?>" placeholder="<?php echo $item->old_aparts_people;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current appartments: people info</strong></td>
                            <td>
                                <input id="old_aparts_people_info" type="text" name="old_aparts_people_info" value="<?php echo $item->old_aparts_people_info;?>" placeholder="<?php echo $item->old_aparts_people_info;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current office: size</strong></td>
                            <td>
                                <input id="old_office_size" type="text" name="old_office_size" value="<?php echo $item->old_office_size;?>" placeholder="<?php echo $item->old_office_size;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current office: floor</strong></td>
                            <td>
                                <input id="old_office_floor" type="text" name="old_office_floor" value="<?php echo $item->old_office_floor;?>" placeholder="<?php echo $item->old_office_floor;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current office: elevator</strong></td>
                            <td>
                                <input id="old_office_elevator" type="text" name="old_office_elevator" value="<?php echo $item->old_office_elevator;?>" placeholder="<?php echo $item->old_office_elevator;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current storage: size</strong></td>
                            <td>
                                <input id="old_storage_size" type="text" name="old_storage_size" value="<?php echo $item->old_storage_size;?>" placeholder="<?php echo $item->old_storage_size;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current storage: size info</strong></td>
                            <td>
                                <input id="old_storage_info" type="text" name="old_storage_info" value="<?php echo $item->old_storage_info;?>" placeholder="<?php echo $item->old_storage_info;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current storage: floor</strong></td>
                            <td>
                                <input id="old_storage_floor" type="text" name="old_storage_floor" value="<?php echo $item->old_storage_floor;?>" placeholder="<?php echo $item->old_storage_floor;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current storage: elevator</strong></td>
                            <td>
                                <input id="old_storage_elevator" type="text" name="old_storage_elevator" value="<?php echo $item->old_storage_elevator;?>" placeholder="<?php echo $item->old_storage_elevator;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current address: elevator restrictions</strong></td>
                            <td>
                                <input id="old_elevator_time" type="text" name="old_elevator_time" value="<?php echo $item->old_elevator_time;?>" placeholder="<?php echo $item->old_elevator_time;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current address: steps to top floor</strong></td>
                            <td>
                                <input id="old_steps" type="text" name="old_steps" value="<?php echo $item->old_steps;?>" placeholder="<?php echo $item->old_steps;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Current address: steps info</strong></td>
                            <td>
                                <input id="old_info" type="text" name="old_info" value="<?php echo $item->old_info;?>" placeholder="<?php echo $item->old_info;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New address</strong></td>
                            <td>
                                <input id="new_address" type="text" name="new_address" value="<?php echo $item->new_address;?>" placeholder="<?php echo $item->new_address;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New place</strong></td>
                            <td>
                                <input id="new_place" type="text" name="new_place" value="<?php echo $item->new_place;?>" placeholder="<?php echo $item->new_place;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New house: size</strong></td>
                            <td>
                                <input id="new_house_size" type="text" name="new_house_size" value="<?php echo $item->new_house_size;?>" placeholder="<?php echo $item->new_house_size;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New house: rooms</strong></td>
                            <td>
                                <input id="new_house_rooms" type="text" name="new_house_rooms" value="<?php echo $item->new_house_rooms;?>" placeholder="<?php echo $item->new_house_rooms;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New house: rooms info</strong></td>
                            <td>
                                <input id="new_house_room_info" type="text" name="new_house_room_info" value="<?php echo $item->new_house_room_info;?>" placeholder="<?php echo $item->new_house_room_info;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New house: people</strong></td>
                            <td>
                                <input id="new_house_people" type="text" name="new_house_people" value="<?php echo $item->new_house_people;?>" placeholder="<?php echo $item->new_house_people;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New house: people info</strong></td>
                            <td>
                                <input id="new_house_people_info" type="text" name="new_house_people_info" value="<?php echo $item->new_house_people_info;?>" placeholder="<?php echo $item->new_house_people_info;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New storage: size</strong></td>
                            <td>
                                <input id="new_storage_size" type="text" name="new_storage_size" value="<?php echo $item->new_storage_size;?>" placeholder="<?php echo $item->new_storage_size;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New storage: size info</strong></td>
                            <td>
                                <input id="new_storage_info" type="text" name="new_storage_info" value="<?php echo $item->new_storage_info;?>" placeholder="<?php echo $item->new_storage_info;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New storage: floor</strong></td>
                            <td>
                                <input id="new_storage_floor" type="text" name="new_storage_floor" value="<?php echo $item->new_storage_floor;?>" placeholder="<?php echo $item->new_storage_floor;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New storage: elevator</strong></td>
                            <td>
                                <input id="new_storage_elevator" type="text" name="new_storage_elevator" value="<?php echo $item->new_storage_elevator;?>" placeholder="<?php echo $item->new_storage_elevator;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New office: size</strong></td>
                            <td>
                                <input id="new_office_size" type="text" name="new_office_size" value="<?php echo $item->new_office_size;?>" placeholder="<?php echo $item->new_office_size;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New office: floor</strong></td>
                            <td>
                                <input id="new_office_floor" type="text" name="new_office_floor" value="<?php echo $item->new_office_floor;?>" placeholder="<?php echo $item->new_office_floor;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New office: elevator</strong></td>
                            <td>
                                <input id="new_office_elevator" type="text" name="new_office_elevator" value="<?php echo $item->new_office_elevator;?>" placeholder="<?php echo $item->new_office_elevator;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New appartments: floor</strong></td>
                            <td>
                                <input id="new_aparts_floor" type="text" name="new_aparts_floor" value="<?php echo $item->new_aparts_floor;?>" placeholder="<?php echo $item->new_aparts_floor;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New appartments: elevator</strong></td>
                            <td>
                                <input id="new_aparts_elevator" type="text" name="new_aparts_elevator" value="<?php echo $item->new_aparts_elevator;?>" placeholder="<?php echo $item->new_aparts_elevator;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New appartments: rooms</strong></td>
                            <td>
                                <input id="new_aparts_rooms" type="text" name="new_aparts_rooms" value="<?php echo $item->new_aparts_rooms;?>" placeholder="<?php echo $item->new_aparts_rooms;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New appartments: rooms info</strong></td>
                            <td>
                                <input id="new_aparts_room_info" type="text" name="new_aparts_room_info" value="<?php echo $item->new_aparts_room_info;?>" placeholder="<?php echo $item->new_aparts_room_info;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New appartments: people</strong></td>
                            <td>
                                <input id="new_aparts_people" type="text" name="new_aparts_people" value="<?php echo $item->new_aparts_people;?>" placeholder="<?php echo $item->new_aparts_people;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New appartments: people info</strong></td>
                            <td>
                                <input id="new_aparts_people_info" type="text" name="new_aparts_people_info" value="<?php echo $item->new_aparts_people_info;?>" placeholder="<?php echo $item->new_aparts_people_info;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New address: elevator restrictions</strong></td>
                            <td>
                                <input id="new_elevator_time" type="text" name="new_elevator_time" value="<?php echo $item->new_elevator_time;?>" placeholder="<?php echo $item->new_elevator_time;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New address: steps to top floor</strong></td>
                            <td>
                                <input id="new_steps" type="text" name="new_steps" value="<?php echo $item->new_steps;?>" placeholder="<?php echo $item->new_steps;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New address: steps info</strong></td>
                            <td>
                                <input id="new_steps_info" type="text" name="new_steps_info" value="<?php echo $item->new_steps_info;?>" placeholder="<?php echo $item->new_steps_info;?>">    
                            </td>
                        </tr>

                        <tr>
                            <td><strong>Planned items</strong></td>
                            <td>
                                <input id="planning_items" type="text" name="planning_items" value="<?php echo $item->planning_items;?>" placeholder="<?php echo $item->planning_items;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Planned items info</strong></td>
                            <td>
                                <input id="planning_items_info" type="text" name="planning_items_info" value="<?php echo $item->planning_items_info;?>" placeholder="<?php echo $item->planning_items_info;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Special care items</strong></td>
                            <td>
                                <input id="special_items" type="text" name="special_items" value="<?php echo $item->special_items;?>" placeholder="<?php echo $item->special_items;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Additional info</strong></td>
                            <td>
                                <input id="anything_details" type="text" name="anything_details" value="<?php echo $item->anything_details;?>" placeholder="<?php echo $item->anything_details;?>">    
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Price</strong></td>
                            <td>
                                <input id="price" type="text" name="price" value="<?php echo $item->price;?>" placeholder="<?php echo $item->price;?>">    
                            </td>
                        </tr>
                    </table>

                    <?php wp_nonce_field( 'action_q', 'q_form_nonce' )?>
                    <input name="q_id"  type="hidden" value="<?php echo $id ?>"/>
                    <input name="action"  type="hidden" value="content_save"/>
                    <button type="submit">Save</button>
                    <input type="submit" class="send__to__pdf" value="Convert to PDF">
                    <input type="submit" class="send__to__client" value="Send to client">

                </div>
            </div>
        </form> 
    
    <?php
        endforeach; 
    ?>

</div>
    
</div>

<script>
// function send() {
//     $.ajax(
//         {url:"/wp-content/themes/shifters-pro/quiz/admin/send-to-client.php", 
//         success:function(result){
//             $("div").text(result);}
//     })
// } 
</script>


 

<?php
     wp_footer()
?>