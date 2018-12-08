$(document).ready(function () {
    $('#contacts-eco-button').on('click', function () {
        var top = $(window).scrollTop() + 100;
        $('#form-consult-eco').css({'top': top});
        $('.black-bg').stop(true, true).fadeIn(300);
        setTimeout(function () {
            $('#form-consult-eco').stop(true, true).fadeIn(300);
        }, 350);
    });
    
    $('#contacts-general-button').on('click', function () {
        var top = $(window).scrollTop() + 100;
        $('#form-consult-general').css({'top': top});
        $('.black-bg').stop(true, true).fadeIn(300);
        setTimeout(function () {
            $('#form-consult-general').stop(true, true).fadeIn(300);
        }, 350);
    });
    
    $('#contacts-repair-button').on('click', function () {
        var top = $(window).scrollTop() + 100;
        $('#form-consult-repair').css({'top': top});
        $('.black-bg').stop(true, true).fadeIn(300);
        setTimeout(function () {
            $('#form-consult-repair').stop(true, true).fadeIn(300);
        }, 350);
    });
    
    $('#contacts-support-button').on('click', function () {
        var top = $(window).scrollTop() + 100;
        $('#form-consult-support').css({'top': top});
        $('.black-bg').stop(true, true).fadeIn(300);
        setTimeout(function () {
            $('#form-consult-support').stop(true, true).fadeIn(300);
        }, 350);
    });
});