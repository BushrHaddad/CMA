;(function () {
	
	'use strict';

	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
			BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
			iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
			Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
			Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
		},
			any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};

	var mobileMenuOutsideClick = function() {

		$(document).click(function (e) {
	    var container = $("#fh5co-offcanvas, .js-fh5co-nav-toggle");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {

	    	if ( $('body').hasClass('offcanvas') ) {

    			$('body').removeClass('offcanvas');
    			$('.js-fh5co-nav-toggle').removeClass('active');
				
	    	}
	    
	    	
	    }
		});

	};


	var offcanvasMenu = function() {

		$('#page').prepend('<div id="fh5co-offcanvas" />');
		$('#page').prepend('<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle fh5co-nav-white"><i></i></a>');
		var clone1 = $('.menu-1 > ul').clone();
		$('#fh5co-offcanvas').append(clone1);
		var clone2 = $('.menu-2 > ul').clone();
		$('#fh5co-offcanvas').append(clone2);

		$('#fh5co-offcanvas .has-dropdown').addClass('offcanvas-has-dropdown');
		$('#fh5co-offcanvas')
			.find('li')
			.removeClass('has-dropdown');

		// Hover dropdown menu on mobile
		$('.offcanvas-has-dropdown').mouseenter(function(){
			var $this = $(this);

			$this
				.addClass('active')
				.find('ul')
				.slideDown(500, 'easeOutExpo');				
		}).mouseleave(function(){

			var $this = $(this);
			$this
				.removeClass('active')
				.find('ul')
				.slideUp(500, 'easeOutExpo');				
		});


		$(window).resize(function(){

			if ( $('body').hasClass('offcanvas') ) {

    			$('body').removeClass('offcanvas');
    			$('.js-fh5co-nav-toggle').removeClass('active');
				
	    	}
		});
	};


	var burgerMenu = function() {

		$('body').on('click', '.js-fh5co-nav-toggle', function(event){
			var $this = $(this);


			if ( $('body').hasClass('overflow offcanvas') ) {
				$('body').removeClass('overflow offcanvas');
			} else {
				$('body').addClass('overflow offcanvas');
			}
			$this.toggleClass('active');
			event.preventDefault();

		});
	};

	var heroCarousel = $("#heroCarousel");
	
	var heroCarouselIndicators = $("#hero-carousel-indicators");
	heroCarousel.find(".carousel-inner").children(".carousel-item").each(function(index) {
	  (index === 0) ?
	  heroCarouselIndicators.append("<li data-target='#heroCarousel' data-slide-to='" + index + "' class='active'></li>"):
		heroCarouselIndicators.append("<li data-target='#heroCarousel' data-slide-to='" + index + "'></li>");
	});
  
	heroCarousel.on('slid.bs.carousel', function(e) {
	  $(this).find('h2').addClass('animate__animated animate__fadeInDown');
	  $(this).find('p, .btn-get-started').addClass('animate__animated animate__fadeInUp');

	});

	var contentWayPoint = function() {
		var i = 0;
		$('.animate-box').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('animated-fast') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .animate-box.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn animated-fast');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft animated-fast');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight animated-fast');
							} else {
								el.addClass('fadeInUp animated-fast');
							}

							el.removeClass('item-animate');
						},  k * 100, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '85%' } );
	};


	var dropdown = function() {

		$('.has-dropdown').mouseenter(function(){

			var $this = $(this);
			$this
				.find('.dropdown')
				.css('display', 'block')
				.addClass('animated-fast fadeInUpMenu');

		}).mouseleave(function(){
			var $this = $(this);

			$this
				.find('.dropdown')
				.css('display', 'none')
				.removeClass('animated-fast fadeInUpMenu');
		});

	};


	var goToTop = function() {

		$('.js-gotop').on('click', function(event){
			
			event.preventDefault();

			$('html, body').animate({
				scrollTop: $('html').offset().top
			}, 500, 'easeInOutExpo');
			
			return false;
		});

		$(window).scroll(function(){

			var $win = $(window);
			if ($win.scrollTop() > 200) {
				$('.js-top').addClass('active');
			} else {
				$('.js-top').removeClass('active');
			}

		});
	
	};


	// Loading page
	var loaderPage = function() {
		$(".fh5co-loader").fadeOut("slow");
	};


	var counterWayPoint = function() {
		if ($('#fh5co-counter').length > 0 ) {
			$('#fh5co-counter').waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {
					setTimeout( counter , 400);					
					$(this.element).addClass('animated');
				}
			} , { offset: '90%' } );
		}
	};

	var sliderMain = function() {
		
	  	$('#fh5co-hero .flexslider').flexslider({
			animation: "fade",
			slideshowSpeed: 5000,
			directionNav: true,
			start: function(){
				setTimeout(function(){
					$('.slider-text').removeClass('animated fadeInUp');
					$('.flex-active-slide').find('.slider-text').addClass('animated fadeInUp');
				}, 500);
			},
			before: function(){
				setTimeout(function(){
					$('.slider-text').removeClass('animated fadeInUp');
					$('.flex-active-slide').find('.slider-text').addClass('animated fadeInUp');
				}, 500);
			}

	  	});

	  	$('#fh5co-hero .flexslider .slides > li');	
	  	$(window).resize(function(){
	  		$('#fh5co-hero .flexslider .slides > li');	
	  	});

	};

	
	$(function(){
		mobileMenuOutsideClick();
		offcanvasMenu();
		burgerMenu();
		contentWayPoint();
		sliderMain();
		dropdown();
		goToTop();
		loaderPage();
		counterWayPoint();
		// fullHeight();
	});

	  // Smooth scroll for the navigation menu and links with .scrollto classes
	  var scrolltoOffset = $('#header').outerHeight() - 17;
	  $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  if (target.length) {
			e.preventDefault();
	
			var scrollto = target.offset().top - scrolltoOffset;
	
			if ($(this).attr("href") == '#header') {
			  scrollto = 0;
			}
	
			$('html, body').animate({
			  scrollTop: scrollto
			}, 1500, 'easeInOutExpo');
	
			if ($(this).parents('.nav-menu, .mobile-nav').length) {
			  $('.nav-menu .active, .mobile-nav .active').removeClass('active');
			  $(this).closest('li').addClass('active');
			}
	
			if ($('body').hasClass('mobile-nav-active')) {
			  $('body').removeClass('mobile-nav-active');
			  $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
			  $('.mobile-nav-overly').fadeOut();
			}
			return false;
		  }
		}
	  });
	
	  // Activate smooth scroll on page load with hash links in the url
	  // $(document).ready(function() {
	  //   if (window.location.hash) {
	  //     var initial_nav = window.location.hash;
	  //     if ($(initial_nav).length) {
	  //       var scrollto = $(initial_nav).offset().top - scrolltoOffset;
	  //       $('html, body').animate({
	  //         scrollTop: scrollto
	  //       }, 1500, 'easeInOutExpo');
	  //     }
	  //   }
	  // });
	
	
	  // Header scroll class
	  $(window).scroll(function() {
		if ($(this).scrollTop() > 100) {
		  $('#header').addClass('header-scrolled');
		} else {
		  $('#header').removeClass('header-scrolled');
		}
	  });
	
	  if ($(window).scrollTop() > 100) {
		$('#header').addClass('header-scrolled');
	  }
	
	  // Navigation active state on scroll
	  var nav_sections = $('section');
	  var main_nav = $('.nav-menu, .mobile-nav');
	
	  $(window).on('scroll', function() {
		var cur_pos = $(this).scrollTop() + 200;
	
		nav_sections.each(function() {
		  var top = $(this).offset().top,
			bottom = top + $(this).outerHeight();
	
		  if (cur_pos >= top && cur_pos <= bottom) {
			if (cur_pos <= bottom) {
			  main_nav.find('li').removeClass('active');
			}
			main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
		  }
		  if (cur_pos < 300) {
			$(".nav-menu ul:first li:first").addClass('active');
		  }
		});
	  });
	
	  // Intro carousel
	  var introCarousel = $(".carousel");
	  var introCarouselIndicators = $(".carousel-indicators");
	  introCarousel.find(".carousel-inner").children(".carousel-item").each(function(index) {
		(index === 0) ?
		introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "' class='active'></li>"):
		  introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "'></li>");
	  });
	
	  introCarousel.on('slid.bs.carousel', function(e) {
		$(this).find('h2').addClass('animate__animated animate__fadeInDown');
		$(this).find('p, .btn-get-started').addClass('animate__animated animate__fadeInUp');
	  });
	

}());