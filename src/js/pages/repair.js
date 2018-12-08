$(document).ready(function () {
    if ($('#range-repair').length > 0) {
        $(function () {
            $("#slider-range").slider({
                range: "min",
                value: 100,
                min: 20,
                max: 600,
                slide: function (event, ui) {
                    $("#amount").val(ui.value);
                    var value = Number(ui.value);
                    if (value <= 100) {
                        value = 8000;
                    }
                    if (value > 100 && value <= 250) {
                        value = 20000;
                    }
                    if (value > 250 && value <= 350) {
                        value = 28000;
                    }
                    if (value > 350 && value <= 600) {
                        value = Number(ui.value) * 80;
                    }
                    $('#amount2').html(value + "<span> руб.</span>");
                    //$('#amount2').html(ui.value + 10 + "<span> руб.</span>");
                }
            });
            $("#amount").val($("#slider-range").slider("value"));
            $('#amount2').html(8000 + "<span> руб.</span>");
        });
    }
    
    
    if ($('#range-repair-home').length > 0) {
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
                        value = 10000;
                    }
                    if (value > 100 && value <= 250) {
                        value = 20000;
                    }
                    if (value > 250 && value <= 350) {
                        value = 30000;
                    }
                    if (value > 350 && value <= 600) {
                        value = Number(ui.value) * 80;
                    }
                    $('#amount2-home').html(value + "<span> руб.</span>");
                    //$('#amount2').html(ui.value + 10 + "<span> руб.</span>");
                }
            });
            $("#amount-home").val($("#slider-range-home").slider("value"));
            $('#amount2-home').html(10000 + "<span> руб.</span>");
        });
    }
    
    
    
     $('#form-header-repair-button').click(function () {
        //$('#input__email').removeClass('error');

        var req = new XMLHttpRequest();
        var formData = new FormData();

        //var name = $('#input-name').val().trim();
        var email = $('#input-form-header-repair-phone').val().trim();
        //var course = $('#input-course').val().trim();
        //formData.append('name', name);
        formData.append('email', email);
        //formData.append('course', course);

        req.onreadystatechange = function () {

            if (req.readyState == 4) {
                if (req.status == 200) {

                    var success = req.getResponseHeader("Success");
                    if (success != null) {
                        $('#input-form-header-repair-success').html("Ваша заявка принята. Менеджер свяжется с вами в течении часа.");
                        $('#input-form-header-repair-phone').removeClass('error');
                        $('#input-form-header-repair-phone-error').html('');
                        $('#input-form-header-repair-phone').val('');

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
                               'action': 'После ремонта.Шапка',
                               'ni': 0
                            }
                        });

                        return;
                    } else {
                        $('#input-form-header-repair-phone').addClass('error');
                        $('#input-form-header-repair-phone-error').html('Введите правильный номер телефона: +7 xxx xxx xx xx');
                        $('#input-form-header-repair-success').text('');
                    }
                }//if (req.status == 200)
            }//if (req.readyState == 4)
        }//req.onreadystatechange = function
        req.open("POST", "formHeaderRepair.php", true);
        req.send(formData);

    });
    
    
    
    
    
    $('#form-count-repair-button').click(function () {
        //$('#input__email').removeClass('error');
        var req = new XMLHttpRequest();
        var formData = new FormData();

        //var name = $('#input-name').val().trim();
        var name = $('#input-form-count-repair-name').val().trim();
        var phone = $('#input-form-count-repair-phone').val().trim();
        //var course = $('#input-course').val().trim();
        //formData.append('name', name);
        formData.append('name', name);
        formData.append('phone', phone);
        //formData.append('course', course);

        req.onreadystatechange = function () {

            if (req.readyState == 4) {
                if (req.status == 200) {

                    var success = req.getResponseHeader("Success");
                    if (success != null) {
                        $('#input-form-count-repair-success').html("Ваша заявка принята. Менеджер свяжется с вами в течении часа.");
                        $('#input-form-count-repair-phone').removeClass('error');
                        $('#input-form-count-repair-phone-error').html('');
                        $('#input-form-count-repair-phone').val('');
                        $('#input-form-count-repair-name').val('');
                        
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventdata': {
                               'category': 'FormSend',
                               'action': 'После ремонта.Рассчитать',
                               'ni': 0
                            }
                        });
                        
                        return;
                    } else {
                        $('#input-form-count-repair-phone').addClass('error');
                        $('#input-form-count-repair-phone-error').html('Введите правильный номер телефона: +7 xxx xxx xx xx');
                        $('#input-form-count-repair-success').text('');
                    }
                }//if (req.status == 200)
            }//if (req.readyState == 4)
        }//req.onreadystatechange = function
        req.open("POST", "formCountRepair.php", true);
        req.send(formData);
    });
    
    
    
    
    $('#form-consult-repair-button').click(function () {
        //$('#input__email').removeClass('error');
        var req = new XMLHttpRequest();
        var formData = new FormData();

        //var name = $('#input-name').val().trim();
        var email = $('#input-form-consult-repair-phone').val().trim();
        //var course = $('#input-course').val().trim();
        //formData.append('name', name);
        formData.append('email', email);
        //formData.append('course', course);

        req.onreadystatechange = function () {

            if (req.readyState == 4) {
                if (req.status == 200) {

                    var success = req.getResponseHeader("Success");
                    if (success != null) {
                        $('#input-form-consult-repair-success').html("Ваша заявка принята. Менеджер свяжется с вами в течении часа.");
                        $('#input-form-consult-repair-phone').removeClass('error');
                        $('#input-form-consult-repair-phone-error').html('');
                        $('#input-form-consult-repair-phone').val('');

                        setTimeout(function () {
                            $('#form-consult-repair').stop(true, true).fadeOut(300);
                            setTimeout(function () {
                                $('.black-bg').stop(true, true).fadeOut(300);
                            }, 350);
                        }, 4000);
                        
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventdata': {
                               'category': 'FormSend',
                               'action': 'После ремонта.Консультация',
                               'ni': 0
                            }
                        });

                        return;
                    } else {
                        $('#input-form-consult-repair-phone').addClass('error');
                        $('#input-form-consult-repair-phone-error').html('Введите правильный номер телефона: +7 xxx xxx xx xx');
                        $('#input-form-consult-repair-success').text('');
                    }
                }//if (req.status == 200)
            }//if (req.readyState == 4)
        }//req.onreadystatechange = function
        req.open("POST", "formConsultRepair.php", true);
        req.send(formData);
    });
    
    
    
    
    $('#form-repair-button').click(function () {
        //$('#input__email').removeClass('error');
        var req = new XMLHttpRequest();
        var formData = new FormData();

        //var name = $('#input-name').val().trim();
        var name = $('#input-form-repair-name').val().trim();
        var phone = $('#input-form-repair-phone').val().trim();
        var message = $('#input-form-repair-message').val().trim();
        //var course = $('#input-course').val().trim();
        //formData.append('name', name);
        formData.append('name', name);
        formData.append('phone', phone);
        formData.append('message', message);
        //formData.append('course', course);

        req.onreadystatechange = function () {

            if (req.readyState == 4) {
                if (req.status == 200) {

                    var success = req.getResponseHeader("Success");
                    if (success != null) {
                        $('#input-form-repair-success').html("Ваша заявка принята. Менеджер свяжется с вами в течении часа.");
                        $('#input-form-repair-phone').removeClass('error');
                        $('#input-form-repair-phone-error').html('');
                        $('#input-form-repair-name').val('');
                        $('#input-form-repair-phone').val('');
                        $('#input-form-repair-message').val('');
                        
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventdata': {
                               'category': 'FormSend',
                               'action': 'После ремонта.Заявка на уборку',
                               'ni': 0
                            }
                        });
                        
                        return;
                    } else {
                        $('#input-form-repair-phone').addClass('error');
                        $('#input-form-repair-phone-error').html('Введите правильный номер телефона: +7 xxx xxx xx xx');
                        $('#input-form-repair-success').text('');
                    }
                }//if (req.status == 200)
            }//if (req.readyState == 4)
        }//req.onreadystatechange = function
        req.open("POST", "formRepair.php", true);
        req.send(formData);
    });
});



