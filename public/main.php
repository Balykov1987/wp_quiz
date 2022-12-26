<?php
/**
 * 
 *
 * 
 */
get_header(); ?>

<section id="estimate-banner">
    <div class="container">
        <div class="quiz-breadcrumbs">
            <a href="/">Home</a> / <span>Estimate</span>
        </div>
        <div class="h1-block">
            <h1>Estimate</h1>
        </div>
    </div>
</section>

<section class="qiuz__section">
    <div class="container">
        <div class="quiz_form">
            <h2>
                <span class="contQ">
                    <span class="currentQ"></span>/<span class="allQ"></span>
                </span>
            </h2>

                <div class="progress_bar">
                    <div class="bar-top">
                        <div class="progress__text">Already filled</div> <div class="progress__num"></div>
                    </div> 
                    <div class="progress"></div>
                    
                </div>
                <div id="quiz_wrap" class="quiz_blockWr">
                <form role="form" method="post">
                    <div id="first-block" class="first-block quiz_block active">

                        <div class="fields-row fields-row__first">
                            <label>
                                <p>Your Name</p>
                                <input type="text" name="user_name" placeholder="First and Last Name" id="user_name" class="field input_frm">
                            </label>
                            <label>
                                <p>Your Email</p>
                                <input type="text" name="user_mail" placeholder="Email Address" id="user_mail" class="field input_frm">
                            </label>
                        </div>
                        <div class="fields-row fields-row__first">
                            <label>
                                <p>Your Phone</p>
                                <input type="text" name="user_phone" placeholder="(***) *** ** **" id="user_phone" class="field input_frm">
                            </label>
                            <label>
                                <p>When are you looking to move?</p>
                                <input type="text" name="move_date" placeholder="Date: mm/dd/yy" id="move_date" class="field input_frm">
                            </label>
                        </div>

                    </div>

                    <div class="quiz_block">                        
                        
                        <?php get_template_part('/quiz/components/services');?>

                    </div>

                    <div id="trh" class="quiz_block">
                        
                        <div class="fields-row current__top-block">
                            <label for="data2">
                                <p>Where are we moving you out of?</p>
                                <input type="text" name="old_address" placeholder="Please enter your CURRENT address" id="moving" class="moving input_frm">
                            </label>
                        </div>

                        <div class="fields-row checkbox__block second-row current__bottom-block">
                            <p>Which of these best describes your CURRENT address?</p>
                            <div class="labels__block two-column">
                                <label>
                                    <input name="old_place" type="radio" value="house" data-tab="1" class="old_place quiz-checkbox second-group" >
                                    <span></span> House
                                </label>
                                <label>
                                    <input name="old_place" type="radio" value="aparts" data-tab="2" class="old_place quiz-checkbox second-group" >
                                    <span></span> Apartment
                                </label>
                                <label>
                                    <input name="old_place" type="radio" value="office" data-tab="3" class="old_place quiz-checkbox second-group" >
                                    <span></span> Office Building
                                </label>
                                <label>
                                    <input name="old_place" type="radio" value="storage" data-tab="4" class="old_place quiz-checkbox second-group" >
                                    <span></span> Storage Facility/Garage
                                </label>
                            </div>
                        </div>

                    </div>

                    <div id="variables__blocks-old" class="quiz_block">
                        <div class="variables__blocks">
                            <div id="house" class="old-place__item open__block" data-tab="1">
                                <?php get_template_part('/quiz/components/house');?>
                            </div>

                            <div id="storage" class="old-place__item" data-tab="4">
                                <?php get_template_part('/quiz/components/storage');?>
                            </div>

                            <div id="office" class="old-place__item" data-tab="3">
                                <?php get_template_part('/quiz/components/office');?>
                            </div>

                            <div id="aparts" class="old-place__item aparts" data-tab="2">
                                <?php get_template_part('/quiz/components/aparts');?>
                            </div>
                        </div>
                    </div>

                    <div id="elevator" class="quiz_block ">
                        <div class="elevator__block">
                            <?php get_template_part('/quiz/components/old-elevator');?>
                        </div>                        
                    </div>

                    <div id="moving_to" class="quiz_block rm">
                        
                        <div class="fields-row">
                            <label for="data2">
                                <p>Where are we moving you to?</p>
                                <input name="new_address" id="new_address" type="text" placeholder="Please enter your NEW address" id="data2" class="input_frm">
                            </label>
                        </div>

                        <div class="fields-row checkbox__block second-row">
                            <p>Which of these best describes your NEW address?</p>
                            <div class="labels__block two-column">
                                <label>
                                    <input name="new_place" type="radio" value="House" data-tab="1" class="new_place quiz-checkbox second-group" >
                                    <span></span> House
                                </label>
                                <label>
                                    <input name="new_place" type="radio" value="Apartment" data-tab="2" class="new_place quiz-checkbox second-group" >
                                    <span></span> Apartment
                                </label>
                                <label>
                                    <input name="new_place" type="radio" value="Office Building" data-tab="3" class="new_place quiz-checkbox second-group" >
                                    <span></span> Office Building
                                </label>
                                <label>
                                    <input name="new_place" type="radio" value="Storage Facility/Garage" data-tab="4" class="new_place quiz-checkbox second-group" >
                                    <span></span> Storage Facility/Garage
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="variables__blocks-new" class="quiz_block">
                        <div class="variables__blocks">
                            <div id="house" class="new-place__item open__block" data-tab="1">
                                <?php get_template_part('/quiz/components/new-house');?>
                            </div>

                            <div id="storage" class="new-place__item" data-tab="4">
                                <?php get_template_part('/quiz/components/new-storage');?>
                            </div>

                            <div id="office" class="new-place__item" data-tab="3">
                                <?php get_template_part('/quiz/components/new-office');?>
                            </div>

                            <div id="aparts" class="new-place__item aparts" data-tab="2">
                                <?php get_template_part('/quiz/components/new-aparts');?>
                            </div>
                        </div>
                    </div>

                    <div id="new_elevator" class="quiz_block ">
                        <div class="elevator__block">
                            <?php get_template_part('/quiz/components/new-elevator');?>
                        </div>                        
                    </div>
                    
                    <div id="planning" class="quiz_block">
                        
                        <div class="fields-row checkbox__block second-row">
                            <p>Are You Planning on Moving Any of the Following Items?</p>
                            <div class="labels__block two-column planning__block">
                                <label class="labels">
                                    <input name="planning_items[]" type="checkbox" value="Piano" class="quiz-checkbox second-group" >
                                    <span></span> Piano
                                </label>
                                <label class="labels">
                                    <input name="planning_items[]" type="checkbox" value="Safe (over 600 lbs)" class="quiz-checkbox second-group" >
                                    <span></span> Safe (over 600 lbs)
                                </label>
                                <label class="labels">
                                    <input name="planning_items[]" type="checkbox" value="Artwork (under $2000)" class="quiz-checkbox second-group" >
                                    <span></span> Artwork (under $2000)
                                </label>
                                <label class="labels">
                                    <input name="planning_items[]" type="checkbox" value="Pool Table" class="quiz-checkbox second-group" >
                                    <span></span> Pool Table
                                </label>
                                <label class="labels">
                                    <input name="planning_items[]" type="checkbox" value="Artwork (over $2000)" class="quiz-checkbox second-group" >
                                    <span></span> Artwork (over $2000)
                                </label>
                                <label class="labels">
                                    <input name="planning_items[]" type="checkbox" value="None of the above" class="quiz-checkbox second-group" >
                                    <span></span> None of the above
                                </label>
                                <label class="label-input__text textarea__label">
                                    <textarea name="planning_items_info" rows="10" cols="65"></textarea>
                                </label>
                            </div>
                        </div>

                    </div>
                    <div id="care" class="quiz_block">
                        <div class="quiz-wrap">
                            <div class="fields-row checkbox__block second-row">
                                <p class="title">Are there any items that need special care?</p>
                                <div class="labels__block two-column">
                                    <label class="label-input__text textarea__label">
                                        <textarea name="special_items" rows="10" cols="65"></textarea>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="last-block" class="quiz_block">
                        <div class="quiz-wrap">
                        <div class="fields-row checkbox__block second-row">
                            <p class="title">Is there anything else we should know about the move?</p>
                            <div class="labels__block two-column">
                                <label class="label-input__text textarea__label">
                                        <textarea name="anything_details" rows="10" cols="65" placeholder="Details"></textarea>
                                </label>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="quiz_block">
                        <div class="quiz-wrap">
                            <div class="quiz__title">
                            Thank you for your inquiry!
                            </div>
                            <p class="sub__title">You should receive a quote within a few business days.</p>
                        </div>
                    </div>

                </div>
                <div class="quiz_blockControl">
                    <div class="block__notice">
                        <span class="notice">This site is protected by reCAPTCHA and the Google Privacy <a href="https://policies.google.com/privacy">Policy</a> and <a href="https://policies.google.com/terms">Terms</a> of Service apply</span>
                    </div>
                    <div class="block__button">
                        <!-- <div class="note">required field</div> -->
                        <div class="blocked"></div>
                        <button type="button" class="btn btnPrev">Back</button>
                        <button type="button" id="button__next" class="btn btnNext">Next</button>
                        <input  onclick="send()" value="submit" name="submitbtn"  type="submit" id="button__next" class="btn btnNext btn__send">
                    </div>
                    
                </div>
            </form>
                
        </div>
    </div>
</section>

<section style="background-color:#313437; " id="section8" class="menu_page">
    <div class="container" style="visibility: inherit;">
        <div class="">
        	<p>
	            <div class="m-add-info">
	                <i class="fas fa-phone-volume"></i>				
			        <div class="m-addbox">					
			            <h6>Phone:</h6>
			            <p>267-734-3419</p>
			        </div>
	            </div>
	            <div class="m-add-info">
	                <i class="fas fa-map-marker-alt"></i>				
			        <div class="m-addbox">					
			            <h6>Address:</h6>
			            <p>527 E Durham St Philadelphia PA 19119</p>
			        </div>
	            </div>
	            <div class="m-add-info">
	                <i class="far fa-envelope"></i>				
			        <div class="m-addbox">					
			            <h6>E-mail:</h6>
			            <p>Meetinghousemovers@gmail.com</p>
			        </div>
	            </div>
            </p>
        </div><!-- .end section class -->  
        <div class="clear"></div>                 
    </div><!-- container -->
</section>

<script>
function send(){
    $.ajax(
        {url:"/wp-content/themes/shifters-pro/quiz/send.php", 
        success:function(result){
            $("div").text(result);}
    })
} 
</script>

<?php
get_footer();
?>
