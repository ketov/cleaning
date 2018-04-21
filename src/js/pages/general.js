$(document).ready(function () {
    $(function () {
        $("#slider-range").slider({
            range: "min",
            value: 20,
            min: 20,
            max: 700,
            slide: function (event, ui) {
                $("#amount").val(ui.value);
                $('#amount2').html(ui.value + 10);
            }
        });
        $("#amount").val($("#slider-range").slider("value"));
        $('#amount2').html($("#slider-range").slider("value") + 1);
    });
});



