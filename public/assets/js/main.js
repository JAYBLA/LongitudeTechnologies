$(window).scroll(function(){
    var sticky = $('.site-main-navi'),
        scroll = $(window).scrollTop();
  
    if (scroll >= 100) sticky.addClass('fixed-navi');
    else sticky.removeClass('fixed-navi');
  });

// Slider
const slides = document.querySelectorAll('.slide');
const controls = document.querySelectorAll('.control');
let activeSlide = 0;
let prevActive = 0;

changeSlides();
let int = setInterval(changeSlides, 5000);

function changeSlides() {
	slides[prevActive].classList.remove('active');
	controls[prevActive].classList.remove('active');

	slides[activeSlide].classList.add('active');
	controls[activeSlide].classList.add('active');
	
	prevActive = activeSlide++;
	
	if(activeSlide >= slides.length) {
		activeSlide = 0;
	}

}

controls.forEach(control => {
	control.addEventListener('click', () => {
		let idx = [...controls].findIndex(c => c === control);
		activeSlide = idx;

		changeSlides();

		clearInterval(int);
		int = setInterval(changeSlides, 5000);
	});
});