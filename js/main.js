document.addEventListener("DOMContentLoaded", function() {

if ($(window).width() > 1000) {
    $('.dropdown-toggle').click(function() {
        window.location = $(this).attr('href'); 
    });
}
$('.nav-link').removeAttr('title');

// let images = document.querySelectorAll('img');
// images.forEach(el => {   
//     const alt = el.getAttribute('alt');
//     const src = el.getAttribute('src').split("/").pop();
//     if (!alt){
//         el.setAttribute('alt', src);
//     }  
// });

});