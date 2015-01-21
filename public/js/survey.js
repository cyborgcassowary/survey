$(function(){

    $('.parallax-window').height($( window ).height());

    $( window ).resize(function() {
        //$( "#log" ).append( "<div>Handler for .resize() called.</div>" );
        $('.parallax-window').height($( window ).height());
    });

    jQuery.fn.extend({
        disable: function(state) {
            return this.each(function() {
                var $this = $(this);
                $this.toggleClass('disabled', state);
            });
        }
    });

    $('a#scroll-q-2').disable(true);
    $('a#scroll-q-3').disable(true);
    $('a#scroll-q-4').disable(true);
    $('a#scroll-q-5').disable(true);

//    $('input[type="submit"]').attr('disabled','disabled');
//
//    $('input[type="email"]').change(function(){
//        if($(this).val != ''){
//            $('input[type="submit"]').removeAttr('disabled');
//        }
//    });

    $('body').on('click', 'a.disabled', function(event) {
        event.preventDefault();
    });





    $('body').addClass('stop-scrolling');
    $('body').bind('touchmove', function(e){e.preventDefault()});

    var q1 = '#survey-question-1 .checkbox'; // .checkbox
    var q2 = '#survey-question-2 .checkbox';
    var q3 = '#survey-question-3 .checkbox';
    var q4 = '#survey-question-4 .checkbox';



    qa1 = [];
    qa2 = [];
    qa3 = [];
    qa4 = [];



    $(q1).change(function(){

        if($(this).prop('checked')){
                $(this).addClass('checked');
                qa1.push($(this).val());
                $.unique(qa1);
                console.log(qa1);
        }
        else {
            $(this).removeClass('checked');
            $('#survey-question-1 input:checkbox').removeAttr('checked');
            qa1.splice(0);
            console.log(qa1);
        }



        if($(this).is(':checked') ){
            if($(q1 + ':checked').length == 2){
                $('a#scroll-q-2').disable(false);
            }
            else if ($(q1 + ':checked').length !== 2){
                $('a#scroll-q-2').disable(true);
            }
        }

        if($(this).not(':checked')){
            if($(q1 + ':checked').length == 2){
                $('a#scroll-q-2').disable(false);
            }
            else if ($(q1 + ':checked').length !== 2){
                $('a#scroll-q-2').disable(true);
            }
        }
    });



    $(q2).change(function(){

        if($(this).prop('checked')){
            $(this).addClass('checked');
            qa2.push($(this).val());
            $.unique(qa2);
            console.log(qa2);
        }
        else{
            $(this).removeClass('checked');
            $('#survey-question-2 input:checkbox').removeAttr('checked');
            qa2.splice(0);
            console.log(qa2);
        }



        if($(this).is(':checked') ){
            if($(q2 + ':checked').length == 2){
                $('a#scroll-q-3').disable(false);
            }
            else if ($(q2 + ':checked').length !== 2){
                $('a#scroll-q-3').disable(true);
            }
        }

        if($(this).not(':checked')){
            if($(q2 + ':checked').length == 2){
                $('a#scroll-q-3').disable(false);
            }
            else if ($(q2 + ':checked').length !== 2){
                $('a#scroll-q-3').disable(true);
            }
        }
    });


    $(q3).change(function(){

        if($(this).prop('checked')){
            $(this).addClass('checked');
            qa3.push($(this).val());
            $.unique(qa3);
            console.log(qa3);
        }
        else {
            $(this).removeClass('checked');
            $('#survey-question-3 input:checkbox').removeAttr('checked');
            qa3.splice(0);
            console.log(qa3);
        }



        if($(this).is(':checked') ){
            if($(q3 + ':checked').length == 2){
                $('a#scroll-q-4').disable(false);
            }
            else if ($(q3 + ':checked').length !== 2){
                $('a#scroll-q-4').disable(true);
            }
        }

        if($(this).not(':checked')){
            if($(q3 + ':checked').length == 2){
                $('a#scroll-q-4').disable(false);
            }
            else if ($(q2 + ':checked').length !== 2){
                $('a#scroll-q-4').disable(true);
            }
        }
    });


    $(q4).change(function(){

        if($(this).prop('checked')){
            $(this).addClass('checked');
            qa4.push($(this).val());
            $.unique(qa4);
            console.log(qa4);
        }
        else{
            $(this).removeClass('checked');
            $('#survey-question-4 input:checkbox').removeAttr('checked');
            qa4.splice(0);
            console.log(qa4);
        }



        if($(this).is(':checked') ){
            if($(q4 + ':checked').length == 2){
                $('a#scroll-q-5').disable(false);
            }
            else if ($(q4 + ':checked').length !== 2){
                $('a#scroll-q-5').disable(true);
            }
        }

        if($(this).not(':checked')){
            if($(q4 + ':checked').length == 2){
                $('a#scroll-q-5').disable(false);
            }
            else if ($(q4 + ':checked').length !== 2){
                $('a#scroll-q-5').disable(true);
            }
        }
    });

//    prevent default for all form links.

    $('#scroll-q-1').click(function(e){
        e.preventDefault();

        $("html, body").animate({scrollTop: $('#survey-question-1').offset().top }, 1000);
    });

    $('#scroll-q-2').click(function(e){
        e.preventDefault();
        $("html, body").animate({scrollTop: $('#survey-question-2').offset().top }, 1000);
        $( '<input type="hidden" name="survey-question-1-hidden" value="'+ qa1[0] + ', ' + qa1[1] +'" />').prependTo( '#survey-question-1' );
    });

    $('#scroll-q-3').click(function(e){
        e.preventDefault();
        $( '<input type="hidden" name="survey-question-2-hidden" value="'+ qa2[0] +', '+ qa2[1] +'" />').prependTo( '#survey-question-2' );
        $("html, body").animate({scrollTop: $('#survey-question-3').offset().top }, 1000);
    });

    $('#scroll-q-4').click(function(e){
        e.preventDefault();
        $( '<input type="hidden" name="survey-question-3-hidden" value="'+ qa3[0] + ', '+ qa3[1] +'" />').prependTo( '#survey-question-3' );
        $("html, body").animate({scrollTop: $('#survey-question-4').offset().top }, 1000);
    });

    $('#scroll-q-5').click(function(e){
        e.preventDefault();
        $( '<input type="hidden" name="survey-question-4-hidden" value="'+ qa4[0] +', '+ qa4[1] +'" />').prependTo( '#survey-question-4' );
        $("html, body").animate({scrollTop: $('#conclusion').offset().top }, 1000);
    });

});