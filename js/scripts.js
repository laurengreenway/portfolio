initMap = function() {
	console.log('dis  work?');
	var home = {lat: 43.640483, lng: -79.374973};
	var map = new google.maps.Map(document.querySelector('.map'), {
		zoom: 12,
		center: home,
        scrollwheel: false
	});
	var marker = new google.maps.Marker({
		position: home,
		map: map,
	});


};



var portfolio = {};

portfolio.display = function() {
	// nav bar change to different color when user scrolls past splash image
   var scroll_start = 0;
   var colorChange = $('.navChange');
   var offset = colorChange.offset();
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
      	//change nav background to highlight color
      	var styles = {
      		background : "#71eeb8",
      		transition : "background 0.3s ease",
      	}
 		$('nav').css(styles);
 		// change hover states to reflect new nav color
 		$('nav a').hover(function() {
 			$(this).css('color', '#fff')
 		}, function() {
 			// remove colour when hover is no longer
 			$(this).css('color', '#232323')
 		});
 		$('nav a').focus(function() {
 			$(this).css('color', '#fff')
 		}, function() {
 			$(this).css('color', '#232323')
 		});
 		
       } else {
       	// default nav
          $('nav').css('background-color', '#ffffff');
          $('a').hover(function() {
          	$('nav a:hover').css('color', '#71eeb8');
          }, function() {
          	$('nav a').css('color', '#232323');
          });
          $('a').focus(function() {
          	$('nav a:focus').css('color', '#71eeb8');
          }, function() {
          	$('nav a').css('color', '#232323');
          });
       };
   });

	// when user clicks on a nav link, smooth scroll takes user to appropriate section
	$('.aboutLink a').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
		});
	$('.portfolioLink a').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
		});
	$('.skillsLink a').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
		});
	$('.contactLink a').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
		});
	$('.homeLink a').click(function(){
	    $('html, body').animate({
	        scrollTop: 0
	    }, 500);
	    return false;
		});


	// animate triangle on landing??


	// user has to click the map to zoom
	$('.map').click(function () {
	      $('.map overlay').css("pointer-events", "auto");
	  });

	// hamburger menu at small desktop breakpoint
	// media queries

	$('.hamburger').on('click', function(){
		$('#menu-primary-nav').toggleClass('hidden show-menu');
		$('#menu-social').toggleClass('show-menu-dupe hidden');
		$('.hamburger i').toggleClass('fa-times fa-bars');

	});

	// hide menu when user clicks any (?) icon
	$('#menu-primary-nav a').on('click', function(){
		if($(window).width() < 940) {
			console.log('close nav function hiee');
			$('#menu-primary-nav').toggleClass('hidden show-menu');
			$('.hamburger i').toggleClass('fa-times fa-bars');
			$('#menu-social').toggleClass('show-menu-dupe hidden');
		}
	});


	function checkWindow() {
		var viewportWidth = $(window).width();
		if (viewportWidth < 940) {
			$('#menu-primary-nav').addClass('hidden');
			$('#menu-social').addClass('show-menu-dupe');
			$('.hamburger').removeClass('hidden')

			// show x icon when menu is shown
			
		} else {
			$('#menu-primary-nav').removeClass('hidden');
			$('.hamburger').addClass('hidden');
		}

	}

	$(window).on("resize", function() {
		checkWindow();
	});
	checkWindow();

};

portfolio.init = function() {
	portfolio.display();
}
 
$(function(){
	// $('a').click(function() {
	// 	console.log('does this work?');
	// 	smoothScroll({
	// 		easing: 'swing',
	// 	});
	// });
	portfolio.init();
	console.log('hi');
});