/** Donation Video Modal */
if (document.location.pathname == "/" || document.location.pathname == "/wordpress_site/" || document.location.pathname == "/testsite/wordpress/"  || document.location.pathname == "/StarlabsWebPage/") {
function playDonationVideo(videoId) {
    let videoContent = document.getElementById("donation-video-" + videoId).innerHTML;
    let modal = document.getElementById("videoModal");
    document.getElementById('donationModalContent').innerHTML = videoContent;
    modal.style.display = "block";
}

    let closeBtn = document.getElementsByClassName("close")[0];
    closeBtn.addEventListener("click", function (event) {
        document.getElementById("videoModal").style.display = "none";
        document.getElementById('donationModalContent').innerHTML = '';
    });
}