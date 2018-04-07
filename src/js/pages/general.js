$(document).ready(function () {
    $(function () {
        $("#slider-range-min").slider({
            range: "min",
            value: 37,
            min: 1,
            max: 700,
            slide: function (event, ui) {
                $("#amount").val("$" + ui.value);
                $('#amount2').html(ui.value + 1);
            }
        });
        $("#amount").val("$" + $("#slider-range-min").slider("value"));
        $('#amount2').html($("#slider-range-min").slider("value") + 1);
    });
});



