$(document).ready(function () {
    if ($('#range-general').length > 0) {
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
                        value = 5000;
                    }
                    if (value > 100 && value <= 250) {
                        value = 10000;
                    }
                    if (value > 250 && value <= 350) {
                        value = 15000;
                    }
                    if (value > 350 && value <= 600) {
                        value = Number(ui.value) * 40;
                    }
                    $('#amount2').html(value + "<span> руб.</span>");
                    //$('#amount2').html(ui.value + 10 + "<span> руб.</span>");
                }
            });
            $("#amount").val($("#slider-range").slider("value"));
            $('#amount2').html(5000 + "<span> руб.</span>");
        });
    }




    $('#form-header-general-button').click(function () {
        //$('#input__email').removeClass('error');
        var req = new XMLHttpRequest();
        var formData = new FormData();

        //var name = $('#input-name').val().trim();
        var email = $('#input-form-header-general-phone').val().trim();
        //var course = $('#input-course').val().trim();
        //formData.append('name', name);
        formData.append('email', email);
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
                        $('#input-form-count-general-success').html("Ваша заявка принята. Менеджер свяжется с вами в течении часа.");
                        $('#input-form-count-general-phone').removeClass('error');
                        $('#input-form-count-general-phone-error').html('');
                        $('#input-form-count-general-phone').val('');
                        $('#input-form-count-general-name').val('');
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
        //var course = $('#input-course').val().trim();
        //formData.append('name', name);
        formData.append('email', email);
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
    
    
});



