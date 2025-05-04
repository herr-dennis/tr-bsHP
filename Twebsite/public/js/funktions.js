document.addEventListener("DOMContentLoaded", function() {
    let scrollBtn = document.getElementById("scrollBtn");

    scrollBtn.addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });


    let facebookBtn = document.getElementById("facebookBtn");
    facebookBtn.addEventListener("click", function() {
       window.open('https://www.facebook.de', '_blank');

    });

    let instagramBtn = document.getElementById("instagramBtn");
    instagramBtn.addEventListener("click", function() {
        window.open('https://www.instagram.de', '_blank');

    });

});

