/* ===================================================
 * bootstrapwp.demo.js v.90
 * ===================================================

// NOTICE!! This JS file is included for reference.
// This code is used to power all the JavaScript
// demos and examples for BootstrapWP
// ++++++++++++++++++++++++++++++++++++++++++*/

!function ($) {

  $(function(){
    var $window = $(window);
    // Adding the needed html to WordPress navigation menus //
    $("ul.dropdown-menu").parent().addClass("dropdown");
    $("ul.nav li.dropdown a").addClass("dropdown-toggle");
    $("ul.dropdown-menu li a").removeClass("dropdown-toggle");
    $('a.dropdown-toggle').attr('data-toggle', 'dropdown');

    // Adding dropdown caret for dropdown menus, if it does not already exist
    $('div.nav-collapse .dropdown-toggle:not(:has(b.caret))').append('<b class="caret"></b>');
     // side bar
    $('.bs-docs-sidenav').affix({
      offset: {
        top: function () { return $window.width() <= 980 ? 290 : 210 }
      , bottom: 270
      }
    });

    // make code pretty
    window.prettyPrint && prettyPrint();

 // add-ons
    $('.add-on :checkbox').on('click', function () {
      var $this = $(this)
        , method = $this.attr('checked') ? 'addClass' : 'removeClass'
      $(this).parents('.add-on')[method]('active')
    });

    // add tipsies to grid for scaffolding
    if ($('#gridSystem').length) {
      $('#gridSystem').tooltip({
          selector: '.show-grid > div'
        , title: function () { return $(this).width() + 'px' }
      });
    }

    // tooltip demo
    $('.tooltip-demo').tooltip({
      selector: "a[rel=tooltip]"
    });

    $('.tooltip-test').tooltip();
    $('.popover-test').popover();

        // popover demo
    $("a[rel=popover]")
      .popover()
      .click(function(e) {
        e.preventDefault()
      });

    // carousel demo
    $('#myCarousel').carousel();
    
    $('#hero').carousel({
    	interval:6000
    });
	
	// Quicksand Protfolio Filter
		// get the action filter option item on page load
	  var $filterType = $('.load-portfolio li.active a').attr('class');
	 
	  // get and assign the ourHolder element to the
	    // $holder varible for use later
	  var $holder = $('ul.portfolio-grid');
	 
	  // clone all items within the pre-assigned $holder element
	  var $data = $holder.clone();
	 
	  // attempt to call Quicksand when a filter option
	    // item is clicked
	    $('.load-portfolio li a').click(function(e) {
	        // reset the active class on all the buttons
	        $('.load-portfolio li').removeClass('active-filter');
	 
	        // assign the class of the clicked filter option
	        // element to our $filterType variable
	        var $filterType = $(this).attr('class');
	        $(this).parent().addClass('active-filter');
	 
	        if ($filterType == 'all') {
	            // assign all li items to the $filteredData var when
	            // the 'All' filter option is clicked
	            var $filteredData = $data.find('li');
	        }
	        else {
	            // find all li elements that have our required $filterType
	            // values for the data-type element
	            var $filteredData = $data.find('li[data-type~=' + $filterType + ']');
	        }
	 
	        // call quicksand and assign transition parameters
	        $holder.quicksand($filteredData, {
	        	duration: 300,
	            easing: 'easeInOutSine', //easeInBack
	        });
	        return false;
	    });
	
 });
 
 // Contact Drawer
 $('#menu-item-56 a, #hero-contact, #close-contact').on('click', function(e) {
 	e.preventDefault();
 	$('.contact-drawer').slideToggle(); 
 	$('html, body').animate({ scrollTop: 0 }, 600);
 });
 
 // Contact Form
 $('#contact-submit').on('click', function(e) {
 	e.preventDefault();
 	
 	// Add spinner
 	$('#contact-submit').after('<i class="icon-spinner icon-spin"></i>');
 	
 	$('#primary-contact').delay(3000);
 	
 	// Remove .error from inputs
 	var input = $('.field-container input');
 	var select = $('.field-container select');
 	var textarea = $('.field-container textarea');
 	if (input.hasClass('error')){
 		input.removeClass('error');
 	}
 	if (select.hasClass('error')) {
 		select.removeClass('error');
 	}
 	if (textarea.hasClass('error')) {
 		textarea.removeClass('error');
 	}
 	
 	if ($('.alert-error').is(':visible')) {
 		$('.alert-error').remove();
 	}
 	if ($('.alert-success').is(':visible')) {
 		$('.alert-success').remove();
 	}
 	// Variables
 	var why = $('#why').val();
 		name = $('#name').val();
 		email = $('#email').val();
 		message = $('#message').val();
 		refer = $('#refer').val();
 		errors = [];
 	
 	if (why == 'none') {
 		$('#why').addClass('error');
 		errors.push('why');
 	}		
 	if (name == "")	{
 		$('#name').addClass('error');
 		errors.push('name');
 	}
 	if (!isValidEmailAddress(email)) {
 		$('#email').addClass('error');
 		errors.push('email');
 	}
 	if (message == "") {
 		$('#message').addClass('error');
 		errors.push('message');
 	}
 	
 	if (errors != 0) {
 		removeSpinner();
 		mainFormError('Please fill in all fields');
 		return false;
 	} else {
 		// Serialize form
 		var data = $('#primary-contact').serialize();
 		
 		// Process From
 		$.ajax({
 			type: 'POST',
 			url: 'http://remtech.us/wp-content/themes/bootstrapwp-Twitter-Bootstrap-for-WordPress/includes/contact-process.php',
 			data: data,
 			success: function(data) {
 				removeSpinner();
 				mainFormSuccess('Your message has been sent. Thank you!');
 				$('#primary-contact').delay(1400);
 				$('#contact-submit').fadeOut();
 				input.attr('disabled','disabled');
 				select.attr('disabled','disabled');
 				textarea.attr('disabled','disabled');
 			},
 			error: function(data) {
 				removeSpinner();
 				mainFormError('There was a problem sending your form, try back later!');		 			}
 		});
 		
 		return false;
 	}
 		
 }); // end #contact-form submit

// Validate email Function
function isValidEmailAddress(emailAddress) {
var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
return pattern.test(emailAddress);
}

function mainFormError(text) {
	$('#contact-submit').after('<span class="alert-error">'+ text +'</span>');
}

function mainFormSuccess(text) {
	$('#contact-submit').after('<span class="alert-success">'+ text +'</span>');
}

function removeSpinner() {
	$('.icon-spinner').remove();
}

}(window.jQuery);