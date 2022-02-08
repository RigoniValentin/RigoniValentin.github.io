document.querySelector('.menu-btn').addEventListener('click', () =>{
    document.querySelector('.nav-menu').classList.toggle('show');
});

// StickMenu
$(document).ready(function(){
	var altura = $('.nav-main').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.nav-main').addClass('menu-fixed');
		} else {
			$('.nav-main').removeClass('menu-fixed');
		}
	});
});