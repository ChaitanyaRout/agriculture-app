$(function() {
    //	for showing notification on page
    var notice = $('#notice').val();
    // alert(notice);
    if (notice) {
        $('.notice').show();
        setTimeout(function() {
            $('.notice').hide();
        }, 3000);
    }

    //	show error notification
    var error = $('#error').val();
    if (error && error != '') {
        $('.fq-error').show();
        setTimeout(function() {
            $('.fq-error').hide();
        }, 3000);
    }
});

$('body').on('click', '.close', function() {
    if ($(this).data('dismiss') == "fq-error")
        $('.fq-error').hide();
});