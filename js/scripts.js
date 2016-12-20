$(function() {
	// jQuery Goes here!

	$('#menuIcon').on('click', function(){
		$('.hamburgerMenu').fadeToggle();
		$(this).toggleClass('fa-bars fa-times');

	})

	// $('.fa-times').on('click', function(){
	// 	$('.hamburgerMenu').fadeOut();
	// 	// $(this).toggleClass('fa-times fa-bars');
	// })

	$('.hamburgerMenu a').on('click', function(){
		$('.hamburgerMenu').fadeOut();

	})

});


