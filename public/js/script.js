//Get the button scroll
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
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
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

    document.querySelector('.navbar-toggler').addEventListener('click', function() {
      const iconBars = document.querySelector('#ada');
      const iconTimes = document.querySelector('#close');
      const navbarToggler = this;

      if (navbarToggler.classList.contains('collapsed')) {
        iconBars.style.display = 'inline-block';
        iconTimes.style.display = 'none';
      } else {
        iconBars.style.display = 'none';
        iconTimes.style.display = 'inline-block';
      }
    });



