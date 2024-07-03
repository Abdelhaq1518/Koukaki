document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper(".swiper-section", {
		effect: "coverflow",
		grabcursor: true,
		centeredSlides: true,
		slidesPerView: "auto",
		direction:'horizontal',
	
			coverflowEffect: {
				rotate: 70,
				stretch: 0,
				depth: 50,
				modifier: 1,
				slideShadows: false,
			},
			
			loop:"true",
			loopedSlides:2,
			loopAdditionalSlides:1,
			autoplay:{
			   delay:1000,
			   disableOnInteraction:false,
			},
	
			speed: 1000,
			
	});
});