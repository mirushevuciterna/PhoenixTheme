
/** Donation Video Modal */


let playDiv = document.getElementsByClassName('playDiv');

for(var i = 0; i < playDiv.length; i++) {
  (function(index) {
    playDiv[index].addEventListener("click", function(event) {
       let btn = event.target;
       let videoUrl = btn.dataset.video;
       let modal = document.getElementById("videoModal"); 
       modal.style.display = "block";
       let videoModalContent = document.getElementById('videoModalContent');
       videoModalContent.src = videoUrl;
     })
  })(i);
}

let closeBtn = document.getElementsByClassName("close")[0];
closeBtn.addEventListener("click", function(event) {
    document.getElementById("videoModal").style.display = "none";
    document.getElementById("videoModalContent").src = "";
});


