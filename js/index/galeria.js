let slideIndex = 0;
showSlides();

// Next/previous controls
const plusSlides = (n) => {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
const currentSlide = (n) => {
  showSlides(slideIndex = n);
}

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 4000); // Change image every 4 seconds
  }