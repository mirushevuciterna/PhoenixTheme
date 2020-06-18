//LogoComponent

$('.owl-carous').owlCarousel({
    item:6,
    singleItem: true,
    autoplay: true,
    autoplayTimeout: 3000,
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

$('.owl-caro').owlCarousel({
    
    margin:10,
    item:6,
    singleItem: true,
    autoplay: true,
    autoplayTimeout: 3000,
    loop: true,
    nav: false,
    navText : ['<img class="buto" src="https://image.flaticon.com/icons/svg/481/481117.svg" aria-hidden="true"></img>','<img class="buto" src="https://image.flaticon.com/icons/svg/481/481115.svg" aria-hidden="true"></i>'],
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


//diffcomponent


// Set the date we're counting down to
var countDownDate = new Date("Jun 5, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo1").innerHTML = days;
  document.getElementById("demo2").innerHTML = hours;
  document.getElementById("demo3").innerHTML = minutes;
  document.getElementById("demo4").innerHTML = seconds;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);




    $(function () {
  count = 0;
  wordsArray = [ "Donate to make a difference", "Volunter and fundraise", "Give a helping hand","Comunity support"];
  setInterval(function () {
    if ( count <= 3){
    $("#word").fadeOut(400, function () {
      $(this).text(wordsArray[count % wordsArray.length]).fadeIn(400);
    }); } else {
        $(this).text(wordsArray[3]).fadeIn(400);
    }   
    count++;    
  }, 2700);
});
