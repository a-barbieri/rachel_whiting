$(document).ready( function() {

/*	PREV NEXT ARROW
 *  ------------------------------------------------------------------
 */
	 function prevnext( n ) {

	    // Get current hash
	    var hash = $.param.fragment();
	 	// Get number of images in the thumb list
	    var	image_total = $('#thumb-list img').length;
	    // Get number for the prev/next slide
	    var slide_num = parseInt(hash.slice(0),10);
	    var new_slide_num = slide_num + n;

	    // Going from first to last slide
	    if ( new_slide_num == 0 ) {
	    	// … and the images are less than 10
	    	if ( image_total < 10) {
	    		var hash_new = '#0' + image_total;
	    	// … otherwise do that
	    	} else {
	    		var hash_new = '#' + image_total;
	    	}
	    }
	    // Going from last to first slide
	    else if ( new_slide_num > image_total ) {
	    	var hash_new = '#01';
	    }
	    // A fix for two digit number from 01 to 09
	    else if ( new_slide_num >= 1 && new_slide_num < 10 ) {
	    	var hash_new = '#0' + new_slide_num;
	    }
	    else {
	    	var hash_new = '#' + new_slide_num;
	    }

	    // Push the hash value on the URL
	    $.bbq.pushState(hash_new);
	 }


	 $('#prevslide').click( function(e) {
	    prevnext( -1 );
	    e.preventDefault();
	 });
	 $('#nextslide').click( function(e) {
	    prevnext( +1 );
	    e.preventDefault();
	 });


/*	BACK TO THUMBS BUTTON
 *  ------------------------------------------------------------------
 */
	$('#back-to-thumbs').click( function() {
		// if it's a phone...

	    if ( $(window).width() <= 767 ) {
			// Show thumbs and hide the slideshow
		    $('.slide-nav, #supersized, #supersized-loader').fadeOut( 300, function() {
			    // show the header
			    $('header').fadeIn(300, function() {
			    	$('#thumb-list').fadeIn( 300 );
			    	$('#supersized').empty(); // reset the slideshow to the initial state (see URL FRAGMENT)
			    });
		    });
		}
		// otherwise...
		else {
			// Show thumbs and hide the slideshow
		    $('.slide-nav, #supersized, #supersized-loader').fadeOut( 300, function() {
		    	$('#thumb-list').fadeIn( 300 );
		    	$('#supersized').empty(); // reset the slideshow to the initial state (see URL FRAGMENT)
		    });
		}

	    $.bbq.pushState(); // clean the URL
	    return false;
	});


/*	SLIDESHO THEME
 *  ------------------------------------------------------------------
 */
	theme = {

	 	/* Initial Placement
		----------------------------*/
	 	_init : function(){

	 		// Center Slide Links
	 		if (api.options.slide_links) $(vars.slide_list).css('margin-left', -$(vars.slide_list).width()/2);

			/* Navigation Items
			----------------------------*/
		    $(vars.next_slide).click(function() {
		    	api.nextSlide();
		    });

		    $(vars.prev_slide).click(function() {
		    	api.prevSlide();
		    });

			if (api.options.thumbnail_navigation){
				// Next thumbnail clicked
				$(vars.next_thumb).click(function() {
			    	api.nextSlide();
			    });
			    // Previous thumbnail clicked
			    $(vars.prev_thumb).click(function() {
			    	api.prevSlide();
			    });
			}

		    $(vars.play_button).click(function() {
				api.playToggle();
		    });
	 	},

	 	/* Before Slide Transition
		----------------------------*/
	 	beforeAnimation : function(direction){

		    if (api.options.progress_bar && !vars.is_paused) $(vars.progress_bar).stop().animate({left : -$(window).width()}, 0 );

		  	/* Update Fields
		  	----------------------------*/
		  	// Update slide caption
		   	if ($(vars.slide_caption).length){
		   		(api.getField('title')) ? $(vars.slide_caption).html(api.getField('title')) : $(vars.slide_caption).html('');
		   	}
		    // Update slide number
			if (vars.slide_current.length){
			    $(vars.slide_current).html(vars.current_slide + 1);
			}

		    // Highlight current thumbnail and adjust row position
		    if (api.options.thumb_links){

				$('.current-thumb').removeClass('current-thumb');
				$('li', vars.thumb_list).eq(vars.current_slide).addClass('current-thumb');
			}
	 	}
	 };

	 /* Theme Specific Variables
	 ----------------------------*/
	 $.supersized.themeVars = {

	 	// Internal Variables
		image_path			:	'img/',				// Default image path

		// General Elements
		next_slide			:	'#nextslide',		// Next slide button
		prev_slide			:	'#prevslide',		// Prev slide button

		slide_caption		:	'#slidecaption',	// Slide caption
		slide_current		:	'.slidenumber',		// Current slide number
		slide_total			:	'.totalslides',		// Total Slides
		slide_list			:	'#slide-list'		// Slide jump list
	 };

	 /* Theme Specific Options
	 ----------------------------*/
	 $.supersized.themeOptions = {

		autoplay				:	0,		// Slideshow starts playing automatically
		new_window				:	0			// Image links open in new window/tab
	 };



/*	RESPONSIVE MENU
 *	----------------------------------------------------------------------
 */
	$('.menu a').click( function() {
		if ( $('nav').hasClass('hidden-phone') ) {
			$(this).text('').append('<img src="../img/back-to-menu.png" alt="back-to-menu" width="16" height="14" />');
			$('nav').hide().removeClass('hidden-phone').slideDown();
		} else {
			$('nav').slideUp( function() {
				$(this).addClass('hidden-phone').show();
				$('.menu a').remove('img').text('MENU');
			});
		}
	})


/*
	window.addEventListener("load",function() {
	  // Set a timeout...
	  setTimeout(function(){
	    // Hide the address bar!
	    window.scrollTo(0, 1);
	  }, 0);
	});

*/
});

