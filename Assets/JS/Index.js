function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}

function currentSlide(n) {
  showSlide(slideIndex = n);
}


let currentSlideIndex = 1;
  const slides = document.querySelectorAll('.slide');
  const totalSlides = slides.length;
  const imageContainer = document.querySelector('.image-container');
  const slideWidth = slides[0].offsetWidth; // Get the width of a single slide
  const buttons = document.querySelectorAll('.buttons a');

  function showSlide(index) {
    if (index < 1) {
      currentSlideIndex = totalSlides;
    } else if (index > totalSlides) {
      currentSlideIndex = 1;
    } else {
      currentSlideIndex = index;
    }

    const translateValue = -(slideWidth * (currentSlideIndex - 1));
    imageContainer.style.transform = 'translateX(' + translateValue + 'px)';

    // Highlight the active button
    buttons.forEach(button => {
      button.classList.remove('active');
    });
    buttons[currentSlideIndex - 1].classList.add('active');
  }

  function nextSlide() {
    showSlide(currentSlideIndex + 1);
  }

  function prevSlide() {
    showSlide(currentSlideIndex - 1);
  }

  function currentSlide(index) {
    showSlide(index);
  }

  setInterval(nextSlide, 6000); // Auto slide every 3 seconds