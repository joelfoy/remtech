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
	        $('.load-portfolio li').removeClass('active');
	 
	        // assign the class of the clicked filter option
	        // element to our $filterType variable
	        var $filterType = $(this).attr('class');
	        $(this).parent().addClass('active');
	 
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

}(window.jQuery);