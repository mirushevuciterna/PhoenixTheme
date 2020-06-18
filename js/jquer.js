//LogoComponent

$('.owl-carous').owlCarousel({
    item:6,
    singleItem: false,
    // autoplay: true,
    // autoplayTimeout: 3000,
    loop: true,
    nav: false,
    responsiveClass: true,
    responsive:{
        0:{
            items: 2,
            nav: false,
            dots: false
        },
        600:{
            items: 3,
            nav: false,
            dots: false
        },
        960:{
            items:5,
            nav: false,
            dots: false
        },
        1200:{
            items: 6,
            nav: false,
            dots: false
        }
    }
});
//LogoComponent

//CausesComponent

$('.owl-carousel').owlCarousel({
    
    margin:10,
    item:6,
    singleItem: true,
    autoplay: true,
    autoplayTimeout: 3000,
    loop: true,
    nav: false,
    // navText : ['<img class="buto" src="https://image.flaticon.com/icons/svg/481/481117.svg" aria-hidden="true"></img>','<img class="buto" src="https://image.flaticon.com/icons/svg/481/481115.svg" aria-hidden="true"></i>'],
    responsiveClass: true,
    responsive:{
        
        0:{
            items: 1,
            dots: true
        },
        600:{
            items: 2,
            dots: true
        },
        960:{
            items:2,
            nav:true,
            dots: true
        },
        1200:{
            items: 3,
            nav: true,
            dots: true
        }
    }
});
document.addEventListener('click', function(e) { if(document.activeElement.toString() == '[object HTMLButtonElement]'){ document.activeElement.blur(); } });

//CausesComponent