<div class="quiz__title">
    Which service or services are you interested in?
</div>
<div class="fields-row checkbox__block moving__label">
    <label>
        <input id="moving" type="checkbox" name="moving" class="move quiz-checkbox first-row" >
        <span></span> Moving - taking your stuff from A to B
    </label>
    <div class="moving-notice">
        Not moving? Select a different service
    </div>
</div>
<div class="quiz__title title__sm">
    Do you need any additional services?
</div>
<div class="fields-row checkbox__block second-row">
    <div class="labels__block">
        <label>
            <input id="packing" type="checkbox" name="additional_services" value="unpacking" data-tab="1" class="moves quiz-checkbox second-group checkbox__services" >
            <span></span> Packing
        </label>
        <label>
            <input id="unpacking" type="checkbox" name="additional_services" value="packing" data-tab="2" class="moves quiz-checkbox second-group checkbox__services" >
            <span></span> Unpacking
        </label>
        <label>
            <input id="mounting" type="checkbox" name="additional_services" value="mounting" data-tab="3" class="moves quiz-checkbox second-group checkbox__services" >
            <span></span> Mounting
        </label>
        <label>
            <input id="crating" type="checkbox" name="additional_services" value="crating" data-tab="4" class="moves quiz-checkbox second-group checkbox__services" >
            <span></span> Crating
        </label>
    </div>
    <div id="second-row-notice" class="checkbox-notice">
        <div class="row-notice notice__title">Remember:</div>
        <div class="row-notice notice__desc">
            <span>Packing</span> and <span>Crating</span> will be scheduled about 1-2 days BEFORE the moving date</br>
            <span>Unpacking</span> and <span>Mounting</span> will be scheduled 1-2 days AFTER your moving date
        </div>
    </div>
    <div class="services__block">
        <div id="packing_block" data-tab="1" class="services__block-item unpacking__block">
            <div class="quiz__title">
                Packing
            </div>
            <p class="sub__title">We have a few questions...</p>
            <div class="fields-row checkbox__block second-row">
                <p>Have you used our services in the past?</p>
                <div class="labels__block two-column">
                    <label>
                        <input name="packing_used" type="radio" value="yes" id="packing__on" class="quiz-checkbox second-group" >
                        <span></span> Yes
                    </label>
                    <label>
                        <input name="packing_used" type="radio" value="no" id="packing__off" class="quiz-checkbox second-group" >
                        <span></span> No
                    </label>
                </div>
            </div>
            <div class="fields-row input__text">
                <label for="data2">
                    <p>At what address will we be PACKING?</p>
                    <input type="text" placeholder="Enter your address" name="packing_address" id="packing_address" class="input_frm">
                </label>
            </div>
            <div class="fields-row input__text">
                <label for="data2">
                    <p>How many bedrooms will we be PACKING</p>
                    <input type="text" placeholder="##" name="packing_bedroom" id="packing_bedroom" class="input_frm">
                </label>
            </div>
            <div class="fields-row input__text">
                <label for="data2">
                    <p>Is there anything else we should know?</p>
                    <input type="text" placeholder="##" name="packing_info" id="packing_info" class="input_frm">
                </label>
            </div>
        </div>
        <div id="unpacking_block" data-tab="2" class="services__block-item packing__block">
            
            <div class="quiz__title">
                Unpacking
            </div>
            <p class="sub__title">We have a few questions...</p>
            <div class="fields-row checkbox__block second-row">
                <p>Have you used our services in the past?</p>
                <div class="labels__block two-column">
                    <label>
                        <input id="expirience__on" name="unpacking_used" type="radio" value="yes" class="quiz-checkbox second-group" >
                        <span></span> Yes
                    </label>
                    <label>
                        <input id="expirience__off" name="unpacking_used" type="radio" value="no" class="quiz-checkbox second-group" >
                        <span></span> No
                    </label>
                </div>
            </div>
            <div class="fields-row input__text">
                <label for="data2">
                    <p>At what address will we be UNPACKING?</p>
                    <input type="text" placeholder="Enter your address" name="unpacking_address" id="unpacking_address" class="input_frm">
                </label>
            </div>
            <div class="fields-row input__text labels__block two-column unpack__bottom-block">
                <label for="data2">
                    <p>How many bedrooms will we be UNPACKING</p>
                    <input type="text" placeholder="##" name="unpacking_bedroom" id="unpacking_bedroom" class="input_frm">
                </label>
            
                <label for="data2">
                    <p>About how many boxes will we be UNPACKING?</p>
                    <input type="text" placeholder="##" name="unpacking_boxes" id="unpacking_boxes" class="input_frm">
                </label>
            </div>
        </div>
        <div id="mounting_block" data-tab="3" class="services__block-item mounting__block">
            
            <div class="quiz__title">
                Mounting
            </div>
            <p class="sub__title">We have a few questions...</p>
            <div class="fields-row checkbox__block second-row">
                <p>Have you used our services in the past?</p>
                <div class="labels__block two-column">
                    <label>
                        <input id="mounting__on" name="mounting_used" type="radio" value="yes" class="quiz-checkbox second-group" >
                        <span></span> Yes
                    </label>
                    <label>
                        <input id="mounting__off" name="mounting_used" type="radio" value="no" class="quiz-checkbox second-group" >
                        <span></span> No
                    </label>
                </div>
            </div>
            <div class="fields-row input__text">
                <label>
                    <p>At what address will we be MOUNTING?</p>
                    <input type="text" placeholder="Enter your address" name="mounting_address" id="mounting_address" class="input_frm">
                </label>
            </div>
            <div class="fields-row input__text">
                <label>
                    <p>Which items will we be MOUNTING?</p>
                    <input type="text" placeholder="Details" name="mounting_details" id="mounting_details" class="input_frm">
                </label>
            </div>
        </div>
        <div id="crating_block" data-tab="4" class="services__block-item crating__block">
        <div class="quiz__title">
                Crating
            </div>
            <p class="sub__title">We have a few questions...</p>
            <div class="fields-row checkbox__block second-row">
                <p>Have you used our services in the past?</p>
                <div class="labels__block two-column">
                    <label>
                        <input id="crating__on" name="crating_used" type="radio" value="yes" class="quiz-checkbox second-group" >
                        <span></span> Yes
                    </label>
                    <label>
                        <input id="crating__off" name="crating_used" type="radio" value="no" class="quiz-checkbox second-group" >
                        <span></span> No
                    </label>
                </div>
            </div>
            <div class="fields-row input__text">
                <label>
                    <p>At what address will we be CRATING?</p>
                    <input type="text" placeholder="Enter your address" name="crating_address" id="crating_address" class="input_frm">
                </label>
            </div>
            <div class="fields-row input__text">
                <label>
                    <p>Which items will we be CRATING?</p>
                    <input type="text" placeholder="Details" name="crating_details" id="crating_details" class="input_frm">
                </label>
            </div>
        </div>
    </div>
</div>