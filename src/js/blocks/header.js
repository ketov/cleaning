$(document).ready(function () {
    $('.header__order').on('click', function () {
        var top = $(window).scrollTop() + 40;
        $('#form-header-general').css({'top': top});
        $('.black-bg').stop(true, true).fadeIn(300);
        setTimeout(function () {
            $('#form-header-general').stop(true, true).fadeIn(300);
        }, 350);
    });
});