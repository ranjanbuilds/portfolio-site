var portfolio = {};

portfolio.map = function() {
	var mymap = L.map('mapid', {
		center: [43.64819, -79.39796],
		zoom: 14,
		touchZoom: false,
		scrollWheelZoom: false,
	});


	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
	    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
	    maxZoom: 18,
	    id: 'rsubs03.17f4350k',
	    accessToken: 'pk.eyJ1IjoicnN1YnMwMyIsImEiOiJjaXNhdm9oanowMDkzMm5ub20wZ3Vzb2NtIn0.LUeKhBEvvFdBW2l43s5Q2w'
	}).addTo(mymap);

	var circle = L.circle([43.64819, -79.39796], 125, {
	    color: '#07575B',
	    fillColor: '#07575B',
	    fillOpacity: 0.8
	}).addTo(mymap);
}

// For Portfolio Section 

portfolio.slideOne = function() {

	for (i=0; i < $('.portfolio_content_container').length; i++) {
		$($('.portfolio_content_container')[i]).css( "z-index", i);
		$($('.carousel_portfolio')[i]).css( "z-index", i);
		$($('.carousel_portfolio2')[i]).css( "z-index", i);
		$($('.carousel_portfolio3')[i]).css( "z-index", i);

		$($('.portfolio_content_container')[i]).show();
		$($('.carousel_portfolio')[i]).show()
		$($('.carousel_portfolio2')[i]).show();
		$($('.carousel_portfolio3')[i]).show();
	}

	// var length = $('.portfolio_content_container').length - 1;
	var counter = $('.portfolio_content_container').length - 1;

	$('.next_portfolio').on('click', removeLayer);
	$('.prev_portfolio').on('click', addLayer);

	function addLayer() {
		console.log(counter);
		if (counter !== 3) {
			if (counter === 0) {
				$($('.carousel_portfolio')[counter + 1]).removeClass('animated slideOutRight');
				$($('.carousel_portfolio')[counter + 1]).show();
				$($('.carousel_portfolio')[counter + 1]).addClass('animated slideInRight');
				
				$($('.carousel_portfolio2')[counter + 1]).removeClass('animated slideOutDown');
				$($('.carousel_portfolio2')[counter + 1]).show();
				$($('.carousel_portfolio2')[counter + 1]).addClass('animated slideInUp');

				$($('.carousel_portfolio3')[counter + 1]).removeClass('animated slideOutRight');
				$($('.carousel_portfolio3')[counter + 1]).show();
				$($('.carousel_portfolio3')[counter + 1]).addClass('animated slideInRight');
				
				counter = counter + 1;
			} else {
				$($('.carousel_portfolio')[counter]).removeClass('animated slideOutRight');
				$($('.carousel_portfolio')[counter]).show();
				$($('.carousel_portfolio')[counter]).addClass('animated slideInRight');

				$($('.carousel_portfolio2')[counter]).removeClass('animated slideOutDown');
				$($('.carousel_portfolio2')[counter]).show();
				$($('.carousel_portfolio2')[counter]).addClass('animated slideInUp');

				$($('.carousel_portfolio3')[counter]).removeClass('animated slideOutRight');
				$($('.carousel_portfolio3')[counter]).show();
				$($('.carousel_portfolio3')[counter]).addClass('animated slideInRight');
			}
		
			$($('.portfolio_content_container')[counter]).show();
			counter = counter + 1;
		}
	}
	
	function removeLayer() {

		if (counter !== 0) {
			console.log(counter);
			if (counter === 3) {
				$($('.carousel_portfolio')[counter - 1]).removeClass('animated slideInRight');
				$($('.carousel_portfolio')[counter - 1]).addClass('animated slideOutRight');
				$($('.carousel_portfolio')[counter - 1]).delay(1000).fadeOut();

				$($('.carousel_portfolio2')[counter - 1]).removeClass('animated slideInUp');
				$($('.carousel_portfolio2')[counter - 1]).addClass('animated slideOutDown');
				$($('.carousel_portfolio2')[counter - 1]).delay(1000).fadeOut();	

				$($('.carousel_portfolio3')[counter - 1]).removeClass('animated slideInRight');
				$($('.carousel_portfolio3')[counter - 1]).addClass('animated slideOutRight');
				$($('.carousel_portfolio3')[counter - 1]).delay(1000).fadeOut();	

				counter = counter - 1
			} else {
				$($('.carousel_portfolio')[counter]).removeClass('animated slideInRight');
				$($('.carousel_portfolio')[counter]).addClass('animated slideOutRight');
				$($('.carousel_portfolio')[counter]).delay(1000).fadeOut();

				$($('.carousel_portfolio2')[counter]).removeClass('animated slideInUp');
				$($('.carousel_portfolio2')[counter]).addClass('animated slideOutDown');
				$($('.carousel_portfolio2')[counter]).delay(1000).fadeOut();

				$($('.carousel_portfolio3')[counter]).removeClass('animated slideInRight');
				$($('.carousel_portfolio3')[counter]).addClass('animated slideOutRight');
				$($('.carousel_portfolio3')[counter]).delay(1000).fadeOut();
			}
		
			$($('.portfolio_content_container')[counter]).hide();
			
			counter = counter - 1;
		} else {
			
			// lastOne = function () {
			// 	$($('.carousel_portfolio')[counter]).animate({
			// 		left: 700,
			// 		right: -700,
			// 	}, 500, function() {
			// 		$(this).removeAttr('style');
			// 	})
			// 	$($('.portfolio_content_container')[counter]).animate({
			// 		bottom: -700,
			// 		top: 700,
			// 	}, 1000, function() {
			// 		$(this).removeAttr('style');
			// 	})
			// }

			// lastOne()
			// setTimeout(function() {
			// 	for (i=0; i < $('.portfolio_content_container').length; i++) {
			// 		$($('.portfolio_content_container')[i]).css( "z-index", i);
			// 		$($('.carousel_portfolio')[i]).css( "z-index", i);
			// 		$($('.portfolio_content_container')[i]).show(500);
			// 		$($('.carousel_portfolio')[i]).show(500)
			// 	}
			// 	counter = $('.portfolio_content_container').length - 1;
			// }, 1000)
		}
	}
}

portfolio.slideTwo = function() {

	for (i=0; i < $('.blog_content_container').length; i++) {
		$($('.blog_content_container')[i]).css( "z-index", i);
		$($('.carousel_blog')[i]).css( "z-index", i);
		$($('.blog_content_container')[i]).show();
		$($('.carousel_blog')[i]).show();
	}

	// var length = $('.portfolio_content_container').length - 1;
	var counter = $('.blog_content_container').length - 1;

	$('.next_blog').on('click', removeLayer);
	
	function removeLayer() {

		if (counter !== 0) {

			$($('.carousel_blog')[counter]).animate({
				left: -700,
				right: 700,
			}, 1000, function() {
				$(this).removeAttr('style');
			})
			
			$($('.blog_content_container')[counter]).animate({
				bottom: -700,
				top: 700,
			}, 1000, function() {
				$(this).removeAttr('style');
			})
			// $($('.carousel_portfolio')[counter]).hide();
			console.log(counter);
			counter = counter - 1;
		} else {
			
			lastOne = function () {
				$($('.carousel_blog')[counter]).animate({
					left: -700,
					right: 700,
				}, 500, function() {
					$(this).removeAttr('style');
				})
				$($('.blog_content_container')[counter]).animate({
					bottom: -700,
					top: 700,
				}, 1000, function() {
					$(this).removeAttr('style');
				})
			}

			lastOne()
			setTimeout(function() {
				for (i=0; i < $('.blog_content_container').length; i++) {
					$($('.blog_content_container')[i]).css( "z-index", i);
					$($('.carousel_blog')[i]).css( "z-index", i);
					$($('.blog_content_container')[i]).show(500);
					$($('.carousel_blog')[i]).show(500)
				}
				counter = $('.blog_content_container').length - 1;
			}, 1000)
		}
	}
}

portfolio.hamburger = function () {
	$('.header__hamburger').on('click', function() {
		$('.header_nav').slideToggle('visible');
	});
}

portfolio.init = function () {
	portfolio.map();
	portfolio.slideOne();
	portfolio.slideTwo();
	portfolio.hamburger();
	$('a[href*="#"]:not([href="#"])').click(function() {
	     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		       var target = $(this.hash);
		       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		       if (target.length) {
		         $('html, body').animate({
		           scrollTop: target.offset().top
		         }, 1000);
		         return false;
		       }
	     	}
	     });
}

$(function() {
	portfolio.init();

}); // /.documentReady

		// $($('.images_portfolio')[i]).animate({
		// 	left: 700,
		// 	right: -700,
		// },500, function() {
		// 	$(this).removeAttr('style'); 

		// 	if (i !== length) {
		// 		$($('.portfolio_content_container')[i + 1]).show();
		// 		$($('.images_portfolio')[i + 1]).show();
		// 	} else {
		// 		$($('.portfolio_content_container')[0]).show();
		// 		$($('.images_portfolio')[0]).show();
		// 	}


		// 	if (i !== length) {
		// 		i = i + 1;
		// 	} else {
		// 		i = 0;
		// 	}

		// });



// On click of the right button
// Picture moves right and new one shows up
// Any way to tap into the loop in php? 
// Class is hidden until - how the f does flickity do it? 
// 