jQuery(function($){

	$(document).ready(function() {

	  $( ".container_evenement" ).click(function() {
	    $(this).css("background-color", "red");
	  });

	  let field = $('#fullpage');

	  console.log('coucou',  field);

	  field.fullpage();
	});
});
// Popup Formulaire de Connexion //

var scrollTop = '';
var newHeight = '100';

jQuery(function($){
	$(window).bind('scroll', function() {
		scrollTop = $( window ).scrollTop();
		newHeight = scrollTop + 100;
	});
		
	$('.popup-trigger').click(function(e) {
  		e.stopPropagation();
		if(jQuery(window).width() < 767) {
		   $(this).after( $( ".popup" ) );
		   $('.popup').show().addClass('popup-mobile').css('top', 0);
		   $('html, body').animate({
				scrollTop: $('.popup').offset().top
			}, 500);   
		}else {
		   $('.popup').removeClass('popup-mobile').css('top', newHeight).toggle();
		};
	});
		
	$('html').click(function() {
		$('.popup').hide();
	});

	$('.popup-btn-close').click(function(e){
		$('.popup').hide();
	});

	$('.popup').click(function(e){
		e.stopPropagation();
	});
});

// Animation Formulaire Connexion //

jQuery(function($){

	$('.tab a').on('click', function (e) {
	  
	  e.preventDefault();
	  
	  $(this).parent().addClass('active');
	  $(this).parent().siblings().removeClass('active');
	  
	  target = $(this).attr('href');

	  $('.tab-content > div').not(target).hide();
	  
	  $(target).fadeIn(600, function(){});
	  
	});

});

//Connexion Facebook//
jQuery(function($){
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.12&appId=1819400048364327&autoLogAppEvents=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));	
});