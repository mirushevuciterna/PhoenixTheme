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


//diffcomponent

var countDownDate = new Date("Jun 5, 2021 15:37:25").getTime();

var x = setInterval(function() {

  var now = new Date().getTime();
    
  var distance = countDownDate - now;
    
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  document.getElementById("demo1").innerHTML = days;
  document.getElementById("demo2").innerHTML = hours;
  document.getElementById("demo3").innerHTML = minutes;
  document.getElementById("demo4").innerHTML = seconds;
    
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);


//changeFjalite
var wordsArray = ["Comunity support", "Volunter and fundraise", "Give a helping hand","Donate to make a difference"];

var count = 0;
function word(){
  if(count < ( wordsArray.length ) ){
  $("#word").fadeOut(400, function () {
    $(this).text(wordsArray[count % wordsArray.length]).fadeIn(400);
    count++;
    }
    )}
  else{
       stop;
  }  
}
setInterval(word, 2000);


<<<<<<< HEAD
  
=======
//CausesComponent

$('.owl-caro-active-events').owlCarousel({
    
    margin:10,
    item:6,
    singleItem: true,
    autoplay: true,
    autoplayTimeout: 5000,
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
            nav:false,
            dots: true
        },
        1200:{
            items: 3,
            nav: false,
            dots: true
        }
    }
});
document.addEventListener('click', function(e) { if(document.activeElement.toString() == '[object HTMLButtonElement]'){ document.activeElement.blur(); } });
>>>>>>> 714b1d3647a38fb3761c52524c27e24695cd7140
