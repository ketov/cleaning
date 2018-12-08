$(document).ready(function () {
    $('#header-eco-button').on('click', function () {
        var top = $(window).scrollTop() + 100;
        $('#form-header-eco').css({'top': top});
        $('.black-bg').stop(true, true).fadeIn(300);
        setTimeout(function () {
            $('#form-header-eco').stop(true, true).fadeIn(300);
        }, 350);
    });
    
    $('#header-general-button').on('click', function () {
        var top = $(window).scrollTop() + 100;
        $('#form-header-general').css({'top': top});
        $('.black-bg').stop(true, true).fadeIn(300);
        setTimeout(function () {
            $('#form-header-general').stop(true, true).fadeIn(300);
        }, 350);
    });
    
    $('#header-support-button').on('click', function () {
        var top = $(window).scrollTop() + 100;
        $('#form-header-support').css({'top': top});
        $('.black-bg').stop(true, true).fadeIn(300);
        setTimeout(function () {
            $('#form-header-support').stop(true, true).fadeIn(300);
        }, 350);
    });
    
    $('#header-repair-button').on('click', function () {
        var top = $(window).scrollTop() + 100;
        $('#form-header-repair').css({'top': top});
        $('.black-bg').stop(true, true).fadeIn(300);
        setTimeout(function () {
            $('#form-header-repair').stop(true, true).fadeIn(300);
        }, 350);
    });
});