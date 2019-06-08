$(document).ready(function () {
    $('#sel1').change(function() {
        if ($(this).val() === '1') {
            $(".checkbox").attr('checked',true);
        }
    });
    $('#sel1').change(function() {
        if ($(this).val() === '0') {
            $(".checkbox").attr('checked',false);
        }
    });
})