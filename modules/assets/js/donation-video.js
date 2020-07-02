/** Donation Video Modal */
<<<<<<< HEAD
if (document.location.pathname == "/" || document.location.pathname == "/wordpress_site/" || document.location.pathname == "/testsite/wordpress/"  || document.location.pathname == "/StarlabsWebPage/") {
function playDonationVideo(videoId) {
    let videoContent = document.getElementById("donation-video-" + videoId).innerHTML;
    let modal = document.getElementById("videoModal");
    document.getElementById('donationModalContent').innerHTML = videoContent;
    modal.style.display = "block";
}
=======
if (document.location.pathname == "/" || document.location.pathname == "/wordpress_site/" || document.location.pathname == "/testsite/wordpress/" || document.location.pathname == "/StarlabsWebPage/") {
    function playDonationVideo(videoId) {
        let videoContent = document.getElementById("donation-video-" + videoId).innerHTML;
        let modal = document.getElementById("videoModal");
        document.getElementById('donationModalContent').innerHTML = videoContent;
        modal.style.display = "block";
    }
>>>>>>> 1bd100c6287a93c8091d0beb70d8b484eaf7c3ca

    let closeBtn = document.getElementsByClassName("close")[0];
    closeBtn.addEventListener("click", function (event) {
        document.getElementById("videoModal").style.display = "none";
        document.getElementById('donationModalContent').innerHTML = '';
    });
}