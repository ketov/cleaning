$(document).ready(function () {
    if ($('#range-support').length > 0) {
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
                        value = 2500;
                    }
                    if (value > 100 && value <= 250) {
                        value = 4500;
                    }
                    if (value > 250 && value <= 350) {
                        value = 6500;
                    }
                    if (value > 350 && value <= 600) {
                        value = Number(ui.value) * 18;
                    }
                    $('#amount2').html(value + "<span> руб.</span>");
                    //$('#amount2').html(ui.value + 10 + "<span> руб.</span>");
                }
            });
            $("#amount").val($("#slider-range").slider("value"));
            $('#amount2').html(2500 + "<span> руб.</span>");
        });
    }
    
    
    $('#form-header-support-button').click(function () {
        //$('#input__email').removeClass('error');
        var req = new XMLHttpRequest();
        var formData = new FormData();

        //var name = $('#input-name').val().trim();
        var email = $('#input-form-header-support-phone').val().trim();
        //var course = $('#input-course').val().trim();
        //formData.append('name', name);
        formData.append('email', email);
        //formData.append('course', course);

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

        //var name = $('#input-name').val().trim();
        var name = $('#input-form-count-support-name').val().trim();
        var phone = $('#input-form-count-support-phone').val().trim();
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
                        $('#input-form-count-support-success').html("Ваша заявка принята. Менеджер свяжется с вами в течении часа.");
                        $('#input-form-count-support-phone').removeClass('error');
                        $('#input-form-count-support-phone-error').html('');
                        $('#input-form-count-support-phone').val('');
                        $('#input-form-count-support-name').val('');
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
});



