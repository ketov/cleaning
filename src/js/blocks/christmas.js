$(document).ready(function () {
    if ($("#christmas-tree").length > 0) {
        var postion = $('#christmas-tree').offset().top,
                w = $(window).height();
        $(document).on('scroll', function () {
            var scroll = $(document).scrollTop();
            if (scroll > postion - w / 3.0) {
                $('#christmas-tree').addClass('active');

                setTimeout(function () {
                    $('#input-promocode2018-code, #input-promocode2018-phone, #promocode2018-button, #promocode2018-discount-number, #promocode2018-discount-text').fadeIn(250);
                }, 2000);
            }
        });


    } else {
        return;
    }


    function str_rand() {
        var result = '';
        var words = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
        var max_position = words.length - 1;
        for (var i = 0; i < 5; ++i) {
            var position = Math.floor(Math.random() * max_position);
            result = result + words.substring(position, position + 1);
        }
        return result;
    }
    var code = str_rand();

    //alert(code);
    $('#input-promocode2018-code').attr('placeholder', 'Ваш промокод: ' + code);




    function randomInteger(min, max) {
        var rand = min - 0.5 + Math.random() * (max - min + 1)
        rand = Math.round(rand);
        return rand;
    }
    var discount = randomInteger(1, 10)
    $('#promocode2018-discount-number').text(discount+'%');



    var swiper = new Swiper('.swiper-container', {
        //pagination: '.swiper-pagination',
        slidesPerView: 2,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        autoplay: 8000,
        autoplayDisableOnInteraction: false,
        paginationClickable: true,
                loop: true,
        spaceBetween: 16,
        breakpoints: {
            1190: {
                slidesPerView: 2
            },
            1110: {
                slidesPerView: 1
            }
        }
    });

    $(function () {
        $('.christmas__slide').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });
    });

    $('.container-tree').on('mouseover', function () {
        $('.bauble').addClass('light');
        $('.star').addClass('star-light');
    })

    $('.container-tree').on('mouseout', function () {
        $('.bauble').removeClass('light');
    })
});