'use strict'


/*function isMobile() {
 if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
 return true
 } else {
 return false
 }
 }*/

/*scrollTo('#logo', '#kozub-block');*/
function scrollTo(element, anchor) {
    $(element).click(function () {
        var destination = $(anchor).offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 500);
        return false;
    });

}



$(document).ready(function () {
    $('.close-form').on('click', function () {
        $(this).parent('.c-form').stop(true, true).fadeOut(300);
        setTimeout(function () {
            $('.black-bg').stop(true, true).fadeOut(300);
        }, 350);
    });

    scrollTo('.header__works', '.works');
    scrollTo('.header__form', '.form');
    scrollTo('.header__map-container', '.contacts');
    
    $('.tabs__tab').on('click', function(){
        var el = $(this);
        if(el.hasClass('active')){
            return;
        }
        else{
            el.siblings('.tabs__tab').removeClass('active');
            el.addClass('active');
            var show = el.attr('data-show');
            var hide = el.attr('data-hide');
            $("#"+show).show();
            $("#"+hide).hide();
        }
    });
    
});