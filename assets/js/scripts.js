	$(document).ready(function() {
	
	/*	Local Scroll
	================================================== */
	
	jQuery('.navbar').localScroll({
			offset: -80,
			duration: 500
		});
		
	/*	Active Menu
	================================================== */
		
	jQuery(function() {
		var sections = jQuery('section');
		var navigation_links = jQuery('nav a');
		sections.waypoint({
		handler: function(direction) {
			var active_section;
			active_section = jQuery(this);
			if (direction === "up") active_section = active_section.prev();
			var active_link = jQuery('nav a[href="#' + active_section.attr("id") + '"]');
			navigation_links.parent().removeClass("active");
			active_link.parent().addClass("active");
			active_section.addClass("active-section");
		},
		offset: '35%'
		});
	});
	
	/*	Animation with Waypoints
	================================================== */
	
	jQuery('.animate').waypoint(function() {
	     var animation = jQuery(this).attr("data-animate");
	     jQuery(this).addClass(animation);
	     jQuery(this).addClass('animated');
	}, { offset: '80%' });
	
	/*	Pretty Photo
	================================================== */
	
	jQuery('#galleryyyy a').attr('rel', 'prettyPhoto');
	jQuery("a[rel^='prettyPhoto']").prettyPhoto();
	
	/*	Bootstrap Carousel
	================================================== */
	
	jQuery('.carousel').carousel()

	jQuery('.request_estimation').on('click', function(e) {
		location.href = '#estimation';
	});

	jQuery('#contact_form_user_name').on('blur', function(e) {
		if (jQuery('#contact_form_user_name').val() === '') {
			jQuery('#contact_form_user_name').addClass('focus-error');
			return false;
		} else {
			jQuery('#contact_form_user_name').removeClass('focus-error');
		}
	});

	jQuery('#contact_form_user_email').on('blur', function(e) {
		if (jQuery('#contact_form_user_email').val() === '') {
			jQuery('#contact_form_user_email').addClass('focus-error');
			return false;
		} else {
			jQuery('#contact_form_user_email').removeClass('focus-error');
		}
	});

	jQuery('#contact_form_user_phone').on('blur', function(e) {
		if (jQuery('#contact_form_user_phone').val() === '') {
			jQuery('#contact_form_user_phone').addClass('focus-error');
			return false;
		} else {
			jQuery('#contact_form_user_phone').removeClass('focus-error');
		}
	});

	jQuery('#contact_form_message').on('blur', function(e) {
		if (jQuery('#contact_form_message').val() === '') {
			jQuery('#contact_form_message').addClass('focus-error');
			return false;
		} else {
			jQuery('#contact_form_message').removeClass('focus-error');
		}
	});

	// jQuery('#contact_form_send_message').on('click', function(e) {
	// 	var args = {
	// 		name: jQuery('#contact_form_user_name').val(),
 //            address: jQuery('#contact_form_user_email').val(),
 //            phone_number: jQuery('#contact_form_user_phone').val(),
 //            body: jQuery('#contact_form_message').val()
	// 	};

	// 	if (args.name === '') {
	// 		jQuery('#contact_form_user_name').addClass('focus-error');
	// 		return false;
	// 	} else {
	// 		jQuery('#contact_form_user_name').removeClass('focus-error');
	// 	}

	// 	if (args.address === '') {
	// 		jQuery('#contact_form_user_email').addClass('focus-error');
	// 		return false;
	// 	} else {
	// 		jQuery('#contact_form_user_email').removeClass('focus-error');
	// 	}

	// 	if (args.phone_number === '') {
	// 		jQuery('#contact_form_user_phone').addClass('focus-error');
	// 		return false;
	// 	} else {
	// 		jQuery('#contact_form_user_phone').removeClass('focus-error');
	// 	}

	// 	if (args.body === '') {
	// 		jQuery('#contact_form_message').addClass('focus-error');
	// 		return false;
	// 	} else {
	// 		jQuery('#contact_form_message').removeClass('focus-error');
	// 	}

 //        $.ajax({
 //            url: 'api/?m=sendmessage',
 //            type: 'POST',
 //            data: JSON.stringify(args),
 //            dataType: 'json',
 //            success: function (msg) {
 //            	var htmlResponse = '<p class="lead">' + msg.message + '</p>';
 //                jQuery('#promo').html(htmlResponse);
 //            },
 //            error: function (request, status, error) {
	// 			var htmlResponse = "<p class=\"lead\">In questo momento non è possibile inviare l'email. Riprova tra qualche istante.<br />Ci scusiamo per il disagio.</p>";
	// 			jQuery('#promo').html(htmlResponse);
 //            }
 //        });

	// 	return false;
	// });

	jQuery('#estimation_form_user_name').on('blur', function(e) {
		if (jQuery('#estimation_form_user_name').val() === '') {
			jQuery('#estimation_form_user_name').addClass('focus-error');
		} else {
			jQuery('#estimation_form_user_name').removeClass('focus-error');
		}
	});

	jQuery('#estimation_form_user_email').on('blur', function(e) {
		if (jQuery('#estimation_form_user_email').val() === '') {
			jQuery('#estimation_form_user_email').addClass('focus-error');
		} else {
			jQuery('#estimation_form_user_email').removeClass('focus-error');
		}
	});

	jQuery('#estimation_form_user_phone').on('blur', function(e) {
		if (jQuery('#estimation_form_user_phone').val() === '') {
			jQuery('#estimation_form_user_phone').addClass('focus-error');
		} else {
			jQuery('#estimation_form_user_phone').removeClass('focus-error');
		}
	});

	jQuery('#estimation_form_message').on('blur', function(e) {
		if (jQuery('#estimation_form_message').val() === '') {
			jQuery('#estimation_form_message').addClass('focus-error');
		} else {
			jQuery('#estimation_form_message').removeClass('focus-error');
		}
	});

	// jQuery('#estimation_form_send_message').on('click', function(e) {
	// 	var args = {
	// 		name: jQuery('#estimation_form_user_name').val(),
	// 		address: jQuery('#estimation_form_user_email').val(),
	// 		phone_number: jQuery('#estimation_form_user_phone').val(),
	// 		body: jQuery('#estimation_form_message').val()
	// 	};

	// 	if (args.name === '') {
	// 		jQuery('#estimation_form_user_name').addClass('focus-error');
	// 		return false;
	// 	} else {
	// 		jQuery('#estimation_form_user_name').removeClass('focus-error');
	// 	}

	// 	if (args.address === '') {
	// 		jQuery('#estimation_form_user_email').addClass('focus-error');
	// 		return false;
	// 	} else {
	// 		jQuery('#estimation_form_user_email').removeClass('focus-error');
	// 	}

	// 	if (args.phone_number === '') {
	// 		jQuery('#estimation_form_user_phone').addClass('focus-error');
	// 		return false;
	// 	} else {
	// 		jQuery('#estimation_form_user_phone').removeClass('focus-error');
	// 	}
		
	// 	if (args.body === '') {
	// 		jQuery('#estimation_form_message').addClass('focus-error');
	// 		return false;
	// 	} else {
	// 		jQuery('#estimation_form_message').removeClass('focus-error');
	// 	}

	// 	var m = args.body ? "requestEstimation_v2" : "requestEstimation"; 
		
	// 	$.ajax({
	// 		url: 'api/?m='+m,
	// 		type: 'POST',
	// 		data: JSON.stringify(args),
	// 		dataType: 'json',
	// 		success: function (msg) {
	// 			var htmlResponse = '<p class="lead">' + msg.message + '</p>';
	// 			jQuery('#estimation_container').html(htmlResponse);
	// 		},
	// 		error: function (request, status, error) {
	// 			var htmlResponse = "<p class=\"lead\">In questo momento non è possibile inviare l'email. Riprova tra qualche istante.<br />Ci scusiamo per il disagio.</p>";
	// 			jQuery('#estimation_container').html(htmlResponse);
	// 		}
	// 	});

	// 	return false;
	// });

	jQuery('#contact_me_phone_number').on('blur', function(e) {
		if (jQuery('#contact_me_phone_number').val() === '') {
			jQuery('#contact_me_phone_number').addClass('focus-error');
		} else {
			jQuery('#contact_me_phone_number').removeClass('focus-error');
		}
	});

	jQuery('#contact_me_send_message').on('click', function(e) {
		var args = {
			phone_number: jQuery('#contact_me_phone_number').val()
		};

		if (args.phone_number === '') {
			jQuery('#contact_me_phone_number').addClass('focus-error');
			return false;
		} else {
			jQuery('#contact_me_phone_number').removeClass('focus-error');
		}

		$.ajax({
			url: 'api/?m=contactme',
			type: 'POST',
			data: JSON.stringify(args),
			dataType: 'json',
			success: function (msg) {
				var htmlResponse = '<p class="lead">' + msg.message + '</p>';
				jQuery('#contact_me_container').html(htmlResponse);
			},
			error: function (request, status, error) {
				var htmlResponse = "<p class=\"lead\">In questo momento non è possibile inviare l'email. Riprova tra qualche istante.<br />Ci scusiamo per il disagio.</p>";
				jQuery('#contact_me_container').html(htmlResponse);
			}
		});
        
		return false;
	});

	
});