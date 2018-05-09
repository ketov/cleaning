$(document).ready(function () {
    $('#contacts-general-button').on('click', function () {
        var top = $(window).scrollTop() + 100;
        $('#form-consult-general').css({'top': top});
        $('.black-bg').stop(true, true).fadeIn(300);
        setTimeout(function () {
            $('#form-consult-general').stop(true, true).fadeIn(300);
        }, 350);
    });
    
    
});