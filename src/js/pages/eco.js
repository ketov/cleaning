$(document).ready(function () {
    

    $('#form-header-eco-button').click(function () {
        //$('#input__email').removeClass('error');
        var req = new XMLHttpRequest();
        var formData = new FormData();

        //var name = $('#input-name').val().trim();
        var email = $('#input-form-header-eco-phone').val().trim();
        //var course = $('#input-course').val().trim();
        //formData.append('name', name);
        formData.append('email', email);
        //formData.append('course', course);

        req.onreadystatechange = function () {

            if (req.readyState == 4) {
                if (req.status == 200) {

                    var success = req.getResponseHeader("Success");
                    if (success != null) {
                        $('#input-form-header-eco-success').html("Ваша заявка принята. Менеджер свяжется с вами в течении часа.");
                        $('#input-form-header-eco-phone').removeClass('error');
                        $('#input-form-header-eco-phone-error').html('');
                        $('#input-form-header-eco-phone').val('');

                        setTimeout(function () {
                            $('#form-header-eco').stop(true, true).fadeOut(300);
                            setTimeout(function () {
                                $('.black-bg').stop(true, true).fadeOut(300);
                            }, 350);
                        }, 4000);
                        
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventdata': {
                               'category': 'FormSend',
                               'action': 'ЭКО-уборка.Шапка',
                               'ni': 0
                            }
                        });

                        return;
                    } else {
                        $('#input-form-header-eco-phone').addClass('error');
                        $('#input-form-header-eco-phone-error').html('Введите правильный номер телефона: +7 xxx xxx xx xx');
                        $('#input-form-header-eco-success').text('');
                    }
                }//if (req.status == 200)
            }//if (req.readyState == 4)
        }//req.onreadystatechange = function
        req.open("POST", "formHeaderEco.php", true);
        req.send(formData);
    });
    
    
    
    
    $('#form-count-eco-button').click(function () {
        //$('#input__email').removeClass('error');
        var req = new XMLHttpRequest();
        var formData = new FormData();

        //var name = $('#input-name').val().trim();
        var name = $('#input-form-count-eco-name').val().trim();
        var phone = $('#input-form-count-eco-phone').val().trim();
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
                        $('#input-form-count-eco-success').html("Ваша заявка принята. Менеджер свяжется с вами в течении часа.");
                        $('#input-form-count-eco-phone').removeClass('error');
                        $('#input-form-count-eco-phone-error').html('');
                        $('#input-form-count-eco-phone').val('');
                        $('#input-form-count-eco-name').val('');
                        
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventdata': {
                               'category': 'FormSend',
                               'action': 'ЭКО.Рассчитать',
                               'ni': 0
                            }
                        });
                        
                        return;
                    } else {
                        $('#input-form-count-eco-phone').addClass('error');
                        $('#input-form-count-eco-phone-error').html('Введите правильный номер телефона: +7 xxx xxx xx xx');
                        $('#input-form-count-eco-success').text('');
                    }
                }//if (req.status == 200)
            }//if (req.readyState == 4)
        }//req.onreadystatechange = function
        req.open("POST", "formCountEco.php", true);
        req.send(formData);
    });
    
    
    
    
    $('#form-consult-eco-button').click(function () {
        //$('#input__email').removeClass('error');
        var req = new XMLHttpRequest();
        var formData = new FormData();

        //var name = $('#input-name').val().trim();
        var email = $('#input-form-consult-eco-phone').val().trim();
        //var course = $('#input-course').val().trim();
        //formData.append('name', name);
        formData.append('email', email);
        //formData.append('course', course);

        req.onreadystatechange = function () {

            if (req.readyState == 4) {
                if (req.status == 200) {

                    var success = req.getResponseHeader("Success");
                    if (success != null) {
                        $('#input-form-consult-eco-success').html("Ваша заявка принята. Менеджер свяжется с вами в течении часа.");
                        $('#input-form-consult-eco-phone').removeClass('error');
                        $('#input-form-consult-eco-phone-error').html('');
                        $('#input-form-consult-eco-phone').val('');

                        setTimeout(function () {
                            $('#form-consult-eco').stop(true, true).fadeOut(300);
                            setTimeout(function () {
                                $('.black-bg').stop(true, true).fadeOut(300);
                            }, 350);
                        }, 4000);
                        
                        dataLayer.push({
                            'event': 'GAevent',
                            'eventdata': {
                               'category': 'FormSend',
                               'action': 'ЭКО.Консультация',
                               'ni': 0
                            }
                        });

                        return;
                    } else {
                        $('#input-form-consult-eco-phone').addClass('error');
                        $('#input-form-consult-eco-phone-error').html('Введите правильный номер телефона: +7 xxx xxx xx xx');
                        $('#input-form-consult-eco-success').text('');
                    }
                }//if (req.status == 200)
            }//if (req.readyState == 4)
        }//req.onreadystatechange = function
        req.open("POST", "formConsultEco.php", true);
        req.send(formData);
    });
    
    
    
    
    
    
    
     
    $('#form-eco-button').click(function () {
        //$('#input__email').removeClass('error');
        var req = new XMLHttpRequest();
        var formData = new FormData();

        //var name = $('#input-name').val().trim();
        var name = $('#input-form-eco-name').val().trim();
        var phone = $('#input-form-eco-phone').val().trim();
        var message = $('#input-form-eco-message').val().trim();
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
                        $('#input-form-eco-success').html("Ваша заявка принята. Менеджер свяжется с вами в течении часа.");
                        $('#input-form-eco-phone').removeClass('error');
                        $('#input-form-eco-phone-error').html('');
                        $('#input-form-eco-name').val('');
                        $('#input-form-eco-phone').val('');
                        $('#input-form-eco-message').val('');
                        
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
                        $('#input-form-eco-phone').addClass('error');
                        $('#input-form-eco-phone-error').html('Введите правильный номер телефона: +7 xxx xxx xx xx');
                        $('#input-form-eco-success').text('');
                    }
                }//if (req.status == 200)
            }//if (req.readyState == 4)
        }//req.onreadystatechange = function
        req.open("POST", "formEco.php", true);
        req.send(formData);
    });
    
    
});



