$(document).ready(function () {
    if ($('#range-general').length > 0) {
        $(function () {
            $("#slider-range").slider({
                range: "min",
                value: 2,
                min: 1,
                max: 4,
                slide: function (event, ui) {
                    $("#amount").val(ui.value);
                    var value = Number(ui.value);
                    if (value == 1) {
                        value = 5000;
                    }
                    if (value == 2) {
                        value = 6000;
                    }
                    if (value == 3) {
                        value = 7000;
                    }
                    if (value == 4) {
                        //value = Number(ui.value) * 40;
                        value = 8000;
                    }
                    $('#amount2').html(value + "<span> руб.</span>");
                    //$('#amount2').html(ui.value + 10 + "<span> руб.</span>");
                }
            });
            $("#amount").val($("#slider-range").slider("value"));
            $('#amount2').html(6000 + "<span> руб.</span>");
        });
    }
    
    if ($('#range-general-home').length > 0) {
        $(function () {
            $("#slider-range-home").slider({
                range: "min",
                value: 100,
                min: 20,
                max: 600,
                slide: function (event, ui) {
                    $("#amount-home").val(ui.value);
                    var value = Number(ui.value);
                    if (value <= 100) {
                        value = 7000;
                    }
                    if (value > 100 && value <= 250) {
                        value = 15000;
                    }
                    if (value > 250 && value <= 350) {
                        value = 20000;
                    }
                    if (value > 350 && value <= 600) {
                        value = Number(ui.value) * 60;
                    }
                    $('#amount2-home').html(value + "<span> руб.</span>");
                    //$('#amount2').html(ui.value + 10 + "<span> руб.</span>");
                }
            });
            $("#amount-home").val($("#slider-range-home").slider("value"));
            $('#amount2-home').html(15000 + "<span> руб.</span>");
        });
    }



    $('.christmas-button').on('click', function () {
        var top = $(window).scrollTop() + 100;
        var h2 = $(this).attr('data-header');
        var form = $(this).attr('data-form');
        //alert(form);
        $('#form-christmas').css({'top': top});
        $('.black-bg').stop(true, true).fadeIn(300);
        setTimeout(function () {
            $('#form-christmas').children('h2').text('Акция «'+h2+'»');
            $('#form-christmas-hidden').val(form);
            $('#form-christmas').stop(true, true).fadeIn(300);
        }, 350);
    });
    
    
    
    $('#form-christmas-button').click(function () {
        var req = new XMLHttpRequest();
        var formData = new FormData();
        
        //alert($('#form-christmas-hidden').val());

        var email = $('#form-christmas-phone').val().trim();
        var form = $('#form-christmas-hidden').val().trim();
        var campaign = $('#form-christmas-campaign').val().trim();        
        var term = $('#form-christmas-term').val().trim(); 

        formData.append('email', email);
        formData.append('form', form);
        formData.append('campaign', campaign);
        formData.append('term', term);

        req.onreadystatechange = function () {

            if (req.readyState == 4) {
                if (req.status == 200) {

                    var success = req.getResponseHeader("Success");
                    if (success != null) {
                        $('#form-christmas-success').html("Ваша заявка принята. Менеджер свяжется с вами в течении часа.");
                        $('#form-christmas-phone').removeClass('error');
                        $('#form-christmas-phone-error').html('');
                        $('#form-christmas-phone').val('');

                        setTimeout(function () {
                            $('#form-christmas').stop(true, true).fadeOut(300);
                            setTimeout(function () {
                                $('.black-bg').stop(true, true).fadeOut(300);
                            }, 350);
                        }, 4000);
                        
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventdata': {
                               'category': 'FormSend',
                               //'action': 'АКЦИЯ2018.Генеральная уборка.Шапка',
                               'action': 'АКЦИЯ2018',
                               'ni': 0
                            }
                        });

                        return;
                    } else {
                        $('#form-christmas-phone').addClass('error');
                        $('#form-christmas-phone-error').html('Введите правильный номер телефона: +7 xxx xxx xx xx');
                        $('#form-christmas-success').text('');
                    }
                }//if (req.status == 200)
            }//if (req.readyState == 4)
        }//req.onreadystatechange = function
        req.open("POST", "formChristmasSlider.php", true);
        req.send(formData);
    });
    
    
    
    
    
    
    
    $('#promocode2018-button').click(function () {
        var req = new XMLHttpRequest();
        var formData = new FormData();

        var email = $('#input-promocode2018-phone').val().trim();
        var discount = $('#promocode2018-discount-number').text();
        var form = $('#form-promocode-christmas-hidden').val().trim();
        var campaign = $('#form-promocode-christmas-campaign').val().trim();        
        var term = $('#form-promocode-christmas-term').val().trim(); 

        formData.append('email', email);
        formData.append('discount', discount);
        formData.append('form', form);
        formData.append('campaign', campaign);
        formData.append('term', term);

        req.onreadystatechange = function () {

            if (req.readyState == 4) {
                if (req.status == 200) {

                    var success = req.getResponseHeader("Success");
                    if (success != null) {
                        $('#input-promocode2018-success').html("Спасибо за заявку! Мы свяжется с вами в течении часа.");
                        $('#input-promocode2018-phone').removeClass('error');
                        //$('#form-christmas-phone-error').html('');
                        $('#input-promocode2018-phone').val('');

                        //setTimeout(function () {
                            $('#promocode2018-button').stop(true, true).hide();
                        //}, 4000);
                        
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventdata': {
                               'category': 'FormSend',
                               //'action': 'АКЦИЯ2018.Генеральная уборка.Шапка',
                               'action': 'АКЦИЯ2018.Ёлка',
                               'ni': 0
                            }
                        });

                        return;
                    } else {
                        $('#input-promocode2018-phone').addClass('error');
                        //$('#form-christmas-phone-error').html('Введите правильный номер телефона: +7 xxx xxx xx xx');
                        //$('#form-christmas-success').text('');
                    }
                }//if (req.status == 200)
            }//if (req.readyState == 4)
        }//req.onreadystatechange = function
        req.open("POST", "formChristmasTree.php", true);
        req.send(formData);
    });
    
    
    
    


    $('#form-header-general-button').click(function () {
        //$('#input__email').removeClass('error');
        var req = new XMLHttpRequest();
        var formData = new FormData();

        //var name = $('#input-name').val().trim();
        var email = $('#input-form-header-general-phone').val().trim();
        var campaign = $('#input-form-header-general-campaign').val().trim();        
        var term = $('#input-form-header-general-term').val().trim();
        //var course = $('#input-course').val().trim();
        //formData.append('name', name);
        formData.append('email', email);
        formData.append('campaign', campaign);
        formData.append('term', term);
        //alert(campaign);
        
        //formData.append('course', course);

        req.onreadystatechange = function () {

            if (req.readyState == 4) {
                if (req.status == 200) {

                    var success = req.getResponseHeader("Success");
                    if (success != null) {
                        $('#input-form-header-general-success').html("Ваша заявка принята. Менеджер свяжется с вами в течении часа.");
                        $('#input-form-header-general-phone').removeClass('error');
                        $('#input-form-header-general-phone-error').html('');
                        $('#input-form-header-general-phone').val('');

                        setTimeout(function () {
                            $('#form-header-general').stop(true, true).fadeOut(300);
                            setTimeout(function () {
                                $('.black-bg').stop(true, true).fadeOut(300);
                            }, 350);
                        }, 4000);
                        
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventdata': {
                               'category': 'FormSend',
                               'action': 'Генеральная уборка.Шапка',
                               'ni': 0
                            }
                        });

                        return;
                    } else {
                        $('#input-form-header-general-phone').addClass('error');
                        $('#input-form-header-general-phone-error').html('Введите правильный номер телефона: +7 xxx xxx xx xx');
                        $('#input-form-header-general-success').text('');
                    }
                }//if (req.status == 200)
            }//if (req.readyState == 4)
        }//req.onreadystatechange = function
        req.open("POST", "formHeaderGeneral.php", true);
        req.send(formData);
    });
    
    
    
    
    $('#form-count-general-button').click(function () {
        //$('#input__email').removeClass('error');
        var req = new XMLHttpRequest();
        var formData = new FormData();

        //var name = $('#input-name').val().trim();
        var name = $('#input-form-count-general-name').val().trim();
        var phone = $('#input-form-count-general-phone').val().trim();
        var campaign = $('#input-form-count-general-campaign').val().trim();        
        var term = $('#input-form-count-general-term').val().trim();
        //var course = $('#input-course').val().trim();
        //formData.append('name', name);
        formData.append('name', name);
        formData.append('phone', phone);
        formData.append('campaign', campaign);
        formData.append('term', term);
        //formData.append('course', course);

        req.onreadystatechange = function () {

            if (req.readyState == 4) {
                if (req.status == 200) {

                    var success = req.getResponseHeader("Success");
                    if (success != null) {
                        $('#input-form-count-general-success').html("Ваша заявка принята. Менеджер свяжется с вами в течении часа.");
                        $('#input-form-count-general-phone').removeClass('error');
                        $('#input-form-count-general-phone-error').html('');
                        $('#input-form-count-general-phone').val('');
                        $('#input-form-count-general-name').val('');
                        
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventdata': {
                               'category': 'FormSend',
                               'action': 'Генеральная уборка.Рассчитать',
                               'ni': 0
                            }
                        });
                        
                        return;
                    } else {
                        $('#input-form-count-general-phone').addClass('error');
                        $('#input-form-count-general-phone-error').html('Введите правильный номер телефона: +7 xxx xxx xx xx');
                        $('#input-form-count-general-success').text('');
                    }
                }//if (req.status == 200)
            }//if (req.readyState == 4)
        }//req.onreadystatechange = function
        req.open("POST", "formCountGeneral.php", true);
        req.send(formData);
    });
    
    
    
    
    $('#form-consult-general-button').click(function () {
        //$('#input__email').removeClass('error');
        var req = new XMLHttpRequest();
        var formData = new FormData();

        //var name = $('#input-name').val().trim();
        var email = $('#input-form-consult-general-phone').val().trim();        
        var campaign = $('#input-form-consult-general-campaign').val().trim();        
        var term = $('#input-form-consult-general-term').val().trim();
        //var course = $('#input-course').val().trim();
        //formData.append('name', name);
        formData.append('email', email);
        formData.append('campaign', campaign);
        formData.append('term', term);
        //formData.append('course', course);

        req.onreadystatechange = function () {

            if (req.readyState == 4) {
                if (req.status == 200) {

                    var success = req.getResponseHeader("Success");
                    if (success != null) {
                        $('#input-form-consult-general-success').html("Ваша заявка принята. Менеджер свяжется с вами в течении часа.");
                        $('#input-form-consult-general-phone').removeClass('error');
                        $('#input-form-consult-general-phone-error').html('');
                        $('#input-form-consult-general-phone').val('');

                        setTimeout(function () {
                            $('#form-consult-general').stop(true, true).fadeOut(300);
                            setTimeout(function () {
                                $('.black-bg').stop(true, true).fadeOut(300);
                            }, 350);
                        }, 4000);
                        
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventdata': {
                               'category': 'FormSend',
                               'action': 'Генеральная уборка.Консультация',
                               'ni': 0
                            }
                        });

                        return;
                    } else {
                        $('#input-form-consult-general-phone').addClass('error');
                        $('#input-form-consult-general-phone-error').html('Введите правильный номер телефона: +7 xxx xxx xx xx');
                        $('#input-form-consult-general-success').text('');
                    }
                }//if (req.status == 200)
            }//if (req.readyState == 4)
        }//req.onreadystatechange = function
        req.open("POST", "formConsultGeneral.php", true);
        req.send(formData);
    });
    
    
    
    
    
    
    
     
    $('#form-general-button').click(function () {
        //$('#input__email').removeClass('error');
        var req = new XMLHttpRequest();
        var formData = new FormData();

        //var name = $('#input-name').val().trim();
        var name = $('#input-form-general-name').val().trim();
        var phone = $('#input-form-general-phone').val().trim();
        var message = $('#input-form-general-message').val().trim();
        var campaign = $('#input-form-general-campaign').val().trim();        
        var term = $('#input-form-general-term').val().trim();
        //var course = $('#input-course').val().trim();
        //formData.append('name', name);
        formData.append('name', name);
        formData.append('phone', phone);
        formData.append('message', message);
        formData.append('campaign', campaign);
        formData.append('term', term);
        //formData.append('course', course);

        req.onreadystatechange = function () {

            if (req.readyState == 4) {
                if (req.status == 200) {

                    var success = req.getResponseHeader("Success");
                    if (success != null) {
                        $('#input-form-general-success').html("Ваша заявка принята. Менеджер свяжется с вами в течении часа.");
                        $('#input-form-general-phone').removeClass('error');
                        $('#input-form-general-phone-error').html('');
                        $('#input-form-general-name').val('');
                        $('#input-form-general-phone').val('');
                        $('#input-form-general-message').val('');
                        
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventdata': {
                               'category': 'FormSend',
                               'action': 'Генеральная уборка.Заявка на уборку',
                               'ni': 0
                            }
                        });
                        
                        return;
                    } else {
                        $('#input-form-general-phone').addClass('error');
                        $('#input-form-general-phone-error').html('Введите правильный номер телефона: +7 xxx xxx xx xx');
                        $('#input-form-general-success').text('');
                    }
                }//if (req.status == 200)
            }//if (req.readyState == 4)
        }//req.onreadystatechange = function
        req.open("POST", "formGeneral.php", true);
        req.send(formData);
    });
    
    
});



