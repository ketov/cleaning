$(document).ready(function () {
    if ($('#range-support').length > 0) {
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
                        value = 3000;
                    }
                    if (value == 2) {
                        value = 3500;
                    }
                    if (value == 3) {
                        value = 4000;
                    }
                    if (value == 4) {
                        value = 4500;
                    }
                    $('#amount2').html(value + "<span> руб.</span>");
                    //$('#amount2').html(ui.value + 10 + "<span> руб.</span>");
                }
            });
            $("#amount").val($("#slider-range").slider("value"));
            $('#amount2').html(3500 + "<span> руб.</span>");
        });
    }
    
    if ($('#range-support-home').length > 0) {
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
                        value = 4000;
                    }
                    if (value > 100 && value <= 250) {
                        value = 6500;
                    }
                    if (value > 250 && value <= 350) {
                        value = 8800;
                    }
                    if (value > 350 && value <= 600) {
                        value = Number(ui.value) * 25;
                    }
                    $('#amount2-home').html(value + "<span> руб.</span>");
                    //$('#amount2').html(ui.value + 10 + "<span> руб.</span>");
                }
            });
            $("#amount-home").val($("#slider-range-home").slider("value"));
            $('#amount2-home').html(6500 + "<span> руб.</span>");
        });
    }
    
    
    $('#form-header-support-button').click(function () {
        var req = new XMLHttpRequest();
        var formData = new FormData();

        var email = $('#input-form-header-support-phone').val().trim();        
        var campaign = $('#input-form-header-support-campaign').val().trim();        
        var term = $('#input-form-header-support-term').val().trim();
        
        formData.append('email', email);        
        formData.append('campaign', campaign);
        formData.append('term', term);

        req.onreadystatechange = function () {

            if (req.readyState == 4) {
                if (req.status == 200) {

                    var success = req.getResponseHeader("Success");
                    if (success != null) {
                        $('#input-form-header-support-success').html("Ваша заявка принята. Менеджер свяжется с вами в течении часа.");
                        $('#input-form-header-support-phone').removeClass('error');
                        $('#input-form-header-support-phone-error').html('');
                        $('#input-form-header-support-phone').val('');

                        setTimeout(function () {
                            $('#form-header-support').stop(true, true).fadeOut(300);
                            setTimeout(function () {
                                $('.black-bg').stop(true, true).fadeOut(300);
                            }, 350);
                        }, 4000);
                        
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventdata': {
                               'category': 'FormSend',
                               'action': 'Поддерживающая.Шапка',
                               'ni': 0
                            }
                        });

                        return;
                    } else {
                        $('#input-form-header-support-phone').addClass('error');
                        $('#input-form-header-support-phone-error').html('Введите правильный номер телефона: +7 xxx xxx xx xx');
                        $('#input-form-header-support-success').text('');
                    }
                }//if (req.status == 200)
            }//if (req.readyState == 4)
        }//req.onreadystatechange = function
        req.open("POST", "formHeaderSupport.php", true);
        req.send(formData);
    });
    
    
    
    $('#form-count-support-button').click(function () {
        //$('#input__email').removeClass('error');
        var req = new XMLHttpRequest();
        var formData = new FormData();

        var name = $('#input-form-count-support-name').val().trim();
        var phone = $('#input-form-count-support-phone').val().trim();        
        var campaign = $('#input-form-count-support-campaign').val().trim();        
        var term = $('#input-form-count-support-term').val().trim();
        formData.append('name', name);
        formData.append('phone', phone);
        formData.append('campaign', campaign);
        formData.append('term', term);

        req.onreadystatechange = function () {

            if (req.readyState == 4) {
                if (req.status == 200) {

                    var success = req.getResponseHeader("Success");
                    if (success != null) {
                        $('#input-form-count-support-success').html("Ваша заявка принята. Менеджер свяжется с вами в течении часа.");
                        $('#input-form-count-support-phone').removeClass('error');
                        $('#input-form-count-support-phone-error').html('');
                        $('#input-form-count-support-phone').val('');
                        $('#input-form-count-support-name').val('');
                        
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventdata': {
                               'category': 'FormSend',
                               'action': 'Поддерживающая.Рассчитать',
                               'ni': 0
                            }
                        });
                        
                        return;
                    } else {
                        $('#input-form-count-support-phone').addClass('error');
                        $('#input-form-count-support-phone-error').html('Введите правильный номер телефона: +7 xxx xxx xx xx');
                        $('#input-form-count-support-success').text('');
                    }
                }//if (req.status == 200)
            }//if (req.readyState == 4)
        }//req.onreadystatechange = function
        req.open("POST", "formCountSupport.php", true);
        req.send(formData);
    });
    
    
    
    $('#form-consult-support-button').click(function () {
        var req = new XMLHttpRequest();
        var formData = new FormData();

        var email = $('#input-form-consult-support-phone').val().trim();
        var campaign = $('#input-form-consult-support-campaign').val().trim();        
        var term = $('#input-form-consult-support-term').val().trim();
        
        formData.append('email', email);        
        formData.append('campaign', campaign);
        formData.append('term', term);

        req.onreadystatechange = function () {

            if (req.readyState == 4) {
                if (req.status == 200) {

                    var success = req.getResponseHeader("Success");
                    if (success != null) {
                        $('#input-form-consult-support-success').html("Ваша заявка принята. Менеджер свяжется с вами в течении часа.");
                        $('#input-form-consult-support-phone').removeClass('error');
                        $('#input-form-consult-support-phone-error').html('');
                        $('#input-form-consult-support-phone').val('');

                        setTimeout(function () {
                            $('#form-consult-support').stop(true, true).fadeOut(300);
                            setTimeout(function () {
                                $('.black-bg').stop(true, true).fadeOut(300);
                            }, 350);
                        }, 4000);
                        
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventdata': {
                               'category': 'FormSend',
                               'action': 'Поддерживающая.Консультация',
                               'ni': 0
                            }
                        });

                        return;
                    } else {
                        $('#input-form-consult-support-phone').addClass('error');
                        $('#input-form-consult-support-phone-error').html('Введите правильный номер телефона: +7 xxx xxx xx xx');
                        $('#input-form-consult-support-success').text('');
                    }
                }//if (req.status == 200)
            }//if (req.readyState == 4)
        }//req.onreadystatechange = function
        req.open("POST", "formConsultSupport.php", true);
        req.send(formData);
    });
    
    
    
    $('#form-support-button').click(function () {
        var req = new XMLHttpRequest();
        var formData = new FormData();

        var name = $('#input-form-support-name').val().trim();
        var phone = $('#input-form-support-phone').val().trim();
        var message = $('#input-form-support-message').val().trim();
        var campaign = $('#input-form-support-campaign').val().trim();        
        var term = $('#input-form-support-term').val().trim();
        
        formData.append('name', name);
        formData.append('phone', phone);
        formData.append('message', message);        
        formData.append('campaign', campaign);
        formData.append('term', term);

        req.onreadystatechange = function () {

            if (req.readyState == 4) {
                if (req.status == 200) {

                    var success = req.getResponseHeader("Success");
                    if (success != null) {
                        $('#input-form-support-success').html("Ваша заявка принята. Менеджер свяжется с вами в течении часа.");
                        $('#input-form-support-phone').removeClass('error');
                        $('#input-form-support-phone-error').html('');
                        $('#input-form-support-name').val('');
                        $('#input-form-support-phone').val('');
                        $('#input-form-support-message').val('');
                        
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventdata': {
                               'category': 'FormSend',
                               'action': 'Поддерживающая.Заявка на уборку',
                               'ni': 0
                            }
                        });
                        
                        return;
                    } else {
                        $('#input-form-support-phone').addClass('error');
                        $('#input-form-support-phone-error').html('Введите правильный номер телефона: +7 xxx xxx xx xx');
                        $('#input-form-support-success').text('');
                    }
                }//if (req.status == 200)
            }//if (req.readyState == 4)
        }//req.onreadystatechange = function
        req.open("POST", "formSupport.php", true);
        req.send(formData);
    });
    
});