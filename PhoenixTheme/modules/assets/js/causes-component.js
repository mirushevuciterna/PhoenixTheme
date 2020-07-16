
//CausesComponent

$('.owl-caro').owlCarousel({

    margin:10,
    item:6,
    singleItem: true,
    autoplay: true,
    autoplayTimeout: 5000,
    loop: true,
    nav: true,
    navText : ['<img class="buto" src="https://image.flaticon.com/icons/svg/481/481117.svg" aria-hidden="true"></img>','<img class="buto" src="https://image.flaticon.com/icons/svg/481/481115.svg" aria-hidden="true"></i>'],
    responsiveClass: true,
    responsive:{

        0:{
            items: 1,
            dots: true,
            nav: false
        },
        600:{
            items: 2,
            dots: true,
            nav: false
        },
        960:{
            items:2,
            dots: true
        },
        1200:{
            items: 3,
            dots: true
        }
    }
});
document.addEventListener('click', function(e) { if(document.activeElement.toString() == '[object HTMLButtonElement]'){ document.activeElement.blur(); } });

//CausesComponent