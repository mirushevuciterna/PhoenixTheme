document.addEventListener("DOMContentLoaded", function() {

    if ($(window).width() > 1000) {
        $('.dropdown-toggle').click(function() {
            window.location = $(this).attr('href'); 
        });
    }
    $('.nav-link').removeAttr('title');


});