    //дополнительные функции на jQuery для работы опросника
    const $ = jQuery; // это для того чтоб wordpress не ругался на $

    let elem = document.getElementById('elevator');
    
    $(document).ready(function(){

        $('#moving').on('click', function() {
            if ($(this).prop("checked") === true) {
                $('.move').addClass('on');
                $('.moving-notice').addClass('hide');
            } else {
                $('.move').removeClass('on');
                $('.moving-notice').removeClass('hide');
            }
        })

        $('#packing').on('click', function() {
            if ($(this).prop("checked") === true) {
                $('#packing_block').addClass('hider');
            } else {
                $('#packing_block').removeClass('hider');
            }
        })

        $('#unpacking').on('click', function() {
            if ($(this).prop("checked") === true) {
                $('#unpacking_block').addClass('hider');
            } else {
                $('#unpacking_block').removeClass('hider');
            }
        })

        $('#mounting').on('click', function() {
            if ($(this).prop("checked") === true) {
                $('#mounting_block').addClass('hider');
            } else {
                $('#mounting_block').removeClass('hider');
            }
        })

        $('#crating').on('click', function() {
            if ($(this).prop("checked") === true) {
                $('#crating_block').addClass('hider');
            } else {
                $('#crating_block').removeClass('hider');
            }
        })

        $('.old_place').on('click', function (){
            var tabName = $(this).data('tab'),
                tab = $('.old-place__item[data-tab="'+tabName+'"]');
        
            $('.old_place.open__block').removeClass('open__block');
            $(this).addClass('open__block');
        
            $('.old-place__item.open__block').removeClass('open__block');
            tab.addClass('open__block');
        })
        
        $('.new_place').on('click', function (){
            var tabName = $(this).data('tab'),
                tab = $('.new-place__item[data-tab="'+tabName+'"]');
        
            $('.new_place.open__block').removeClass('open__block');
            $(this).addClass('open__block');
        
            $('.new-place__item.open__block').removeClass('open__block');
            tab.addClass('open__block');
        })

        $('input[type=radio][name=old_place]').change(function(){
            if (this.value == "house") {
                $('#old_house-on__block').addClass('open__block');
                $('#elevator-off__block').removeClass('open__block');
                $('#elevator-on__block').removeClass('open__block');
            } else  {
                $('#old_house-on__block').removeClass('open__block');
            }
        })

        $('input[type=radio][name=elevator_in_aparts]').change(function(){
            if (this.value == "yes") {
                $('#old_house-on__block').removeClass('open__block');
                $('#elevator-off__block').removeClass('open__block');
                $('#elevator-on__block').addClass('open__block');
            } else if (this.value == "no") {
                $('#old_house-on__block').removeClass('open__block');
                $('#elevator-on__block').removeClass('open__block');
                $('#elevator-off__block').addClass('open__block');
            }
        })

        $('input[type=radio][name=elevator_in_office]').change(function(){
            if (this.value == "yes") {
                $('#elevator-off__block').removeClass('open__block');
                $('#old_house-on__block').removeClass('open__block');
                $('#elevator-on__block').addClass('open__block');
            } else if (this.value == "no") {
                $('#elevator-on__block').removeClass('open__block');
                $('#old_house-on__block').removeClass('open__block');
                $('#elevator-off__block').addClass('open__block');
            }
        })

        $('input[type=radio][name=elevator_in_storage]').change(function(){
            if (this.value == "yes") {
                $('#old_house-on__block').removeClass('open__block');
                $('#elevator-off__block').removeClass('open__block');
                $('#elevator-on__block').addClass('open__block');
            } else if (this.value == "no") {
                $('#old_house-on__block').removeClass('open__block');
                $('#elevator-on__block').removeClass('open__block');
                $('#elevator-off__block').addClass('open__block');
            }
        })
        //==========================NEW ELEVATOR============================//
        $('input[type=radio][name=new_place]').change(function(){
            if (this.value == "House") {
                $('#new_house-on__block').addClass('open__block');
                $('#new_elevator-off__block').removeClass('open__block');
                $('#new_elevator-on__block').removeClass('open__block');
            } else  {
                $('#new_house-on__block').removeClass('open__block');
            }
        })

        $('input[type=radio][name=new_storage_elevator]').change(function(){
            if (this.value == "yes") {
                $('#new_elevator-off__block').removeClass('open__block');
                $('#new_elevator-on__block').addClass('open__block');
            } else if (this.value == "no") {
                $('#new_elevator-on__block').removeClass('open__block');
                $('#new_elevator-off__block').addClass('open__block');
            }
        })

        $('input[type=radio][name=new_aparts_elevator]').change(function(){
            if (this.value == "yes") {
                $('#new_elevator-off__block').removeClass('open__block');
                $('#new_elevator-on__block').addClass('open__block');
            } else if (this.value == "no") {
                $('#new_elevator-on__block').removeClass('open__block');
                $('#new_elevator-off__block').addClass('open__block');
            }
        })

        $('input[type=radio][name=new_office_elevator]').change(function(){
            if (this.value == "yes") {
                $('#new_elevator-off__block').removeClass('open__block');
                $('#new_elevator-on__block').addClass('open__block');
            } else if (this.value == "no") {
                $('#new_elevator-on__block').removeClass('open__block');
                $('#new_elevator-off__block').addClass('open__block');
            }
        })

  

    })
     


    