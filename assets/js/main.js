$(document).ready(function() {
    function movediv() {
        window_height = $(window).height();
        window_width = $(window).width();

        form_height = $('#form-package').height();
        form_width = $('#form-package').width();

        $('#form-package').css('top', (window_height / 2) - (form_height / 2)).css('left', (window_width / 2) - (form_width / 2));
    }

    movediv();

    $(window).resize(function() {
        movediv();
    });
})