// scripts.js

// Back to Top Button
let mybutton = document.getElementById("btn-back-to-top");

// Memastikan elemen ada sebelum menangani peristiwa scroll
if (mybutton) {
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
}

// Navbar Toggler
let navbarToggler = document.querySelector('.navbar-toggler');

// Memastikan elemen ada sebelum menangani peristiwa click
if (navbarToggler) {
    navbarToggler.addEventListener('click', function () {
        const iconBars = document.querySelector('#ada');
        const iconTimes = document.querySelector('#close');

        if (navbarToggler.classList.contains('collapsed')) {
            iconBars.style.display = 'inline-block';
            iconTimes.style.display = 'none';
        } else {
            iconBars.style.display = 'none';
            iconTimes.style.display = 'inline-block';
        }
    });
}
