/* ------------------------------------------------------------------------------
*
*  # JS core
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {

    // Disable CSS transitions on page load
    $('body').addClass('no-transitions');


    // ========================================
    //
    // Content area height
    //
    // ========================================

    // Calculate min height
    function containerHeight() {
        var pageContainerClass = 'page-container',
            bottomNavbarClass = 'navbar-fixed-bottom',
            bottomNavbar = $('.' + bottomNavbarClass).length && $('.' + bottomNavbarClass).outerHeight(),
            availableHeight = $(window).height() - $('.' + pageContainerClass).offset().top - bottomNavbar;

        $('.' + pageContainerClass).attr('style', 'min-height:' + availableHeight + 'px');
    }

    // Initialize Calculate min height
    containerHeight();

    // ========================================
    //
    // Element controls
    //
    // ========================================

    // Collapse elements
    // -------------------------

    // Sidebar categories

    // Collapse on click
    $('.category-title [data-action=collapse]').click(function (e) {
        e.preventDefault();
        var $categoryCollapse = $(this).parent().parent().parent().nextAll();
        $(this).parents('.category-title').toggleClass('category-collapsed');
        $(this).toggleClass('rotate-180');

        containerHeight(); // adjust page height

        $categoryCollapse.slideToggle(150);
    });

    // Panels

    // Collapse on click
    $('.panel [data-action=collapse]').click(function (e) {
        e.preventDefault();
        var $panelCollapse = $(this).parent().parent().parent().parent().nextAll();
        $(this).parents('.panel').toggleClass('panel-collapsed');
        $(this).toggleClass('rotate-180');

        containerHeight(); // recalculate page height

        $panelCollapse.slideToggle(150);
    });

    // ========================================
    //
    // Sidebars
    //
    // ========================================

    // Mini sidebar
    // -------------------------

    // Toggle mini sidebar
    $('.sidebar-main-toggle').on('click', function (e) {
        e.preventDefault();

        // Toggle min sidebar class
        $('body').toggleClass('sidebar-xs');
    });

    // Sidebar controls
    // -------------------------

    // Hide detached sidebar
    $(document).on('click', '.sidebar-detached-hide', function (e) {
        e.preventDefault();
        $('body').toggleClass('sidebar-detached-hidden');
    });

    // Mobile sidebar controls
    // -------------------------

    // Toggle main sidebar
    $('.sidebar-mobile-main-toggle').on('click', function (e) {
        e.preventDefault();
        $('body').toggleClass('sidebar-mobile-main').removeClass('sidebar-mobile-secondary sidebar-mobile-opposite sidebar-mobile-detached');
    });

    // Toggle detached sidebar
    $('.sidebar-mobile-detached-toggle').on('click', function (e) {
        e.preventDefault();
        $('body').toggleClass('sidebar-mobile-detached').removeClass('sidebar-mobile-main sidebar-mobile-secondary sidebar-mobile-opposite');
    });

    // Mobile sidebar setup
    // -------------------------

    $(window).on('resize', function() {
        setTimeout(function() {
            containerHeight();
            
            if($(window).width() <= 768) {
                // Place detached sidebar before content
                $('.sidebar-detached').insertBefore('.content-wrapper');
            }
            else {

                // Remove all mobile sidebar classes
                $('body').removeClass('sidebar-mobile-main sidebar-mobile-secondary sidebar-mobile-detached sidebar-mobile-opposite');

                // Revert left detached position
                if($('body').hasClass('has-detached-left')) {
                    $('.sidebar-detached').insertBefore('.container-detached');
                }

                // Revert right detached position
                else if($('body').hasClass('has-detached-right')) {
                    $('.sidebar-detached').insertAfter('.container-detached');
                }

                // Remove visibility of heading elements on desktop
                $('.page-header-content, .panel-heading, .panel-footer').removeClass('has-visible-elements');
                $('.heading-elements').removeClass('visible-elements');

            }
        }, 100);
    }).resize();

	// Setup Nice scroll for sidebar
	function initScroll() {
	    $(".sidebar-detached .sidebar").niceScroll({
	        mousescrollstep: 100,
	        cursorcolor: '#ccc',
	        cursorborder: '',
			cursorwidth: 3,
			emulatetouch: true,
	        hidecursordelay: 100,
	        autohidemode: 'scroll',
	        horizrailenabled: false,
	        preservenativescrolling: false,
	        railpadding: {
	        	right: 0.5,
	        	top: 1.5,
	        	bottom: 1.5
	        }
	    });
	}

	// Resize Nice scroll for sidebar
	function resizeScroll() {
		$('.sidebar-detached .sidebar').getNiceScroll().resize();
	}

	// Remove
	function removeScroll() {
		$(".sidebar-detached .sidebar").getNiceScroll().remove();
		$(".sidebar-detached .sidebar").removeAttr('style').removeAttr('tabindex');
	}

    // Resize sidebar on scroll
    // ------------------------------

	// Resize detached sidebar vertically when bottom reached
    function resizeDetached() {
		$(window).on('load scroll', function() {
		  if ($(window).scrollTop() > $(document).height() - $(window).height() - 60) {
		    $('.sidebar-detached').addClass('fixed-sidebar-space');
		    resizeScroll();
		  }
		  else {
		    $('.sidebar-detached').removeClass('fixed-sidebar-space');
		    resizeScroll();
		  }
		});
    }

    // Affix detached sidebar
    // ------------------------------

    // Init nicescroll when sidebar affixed
	$('.sidebar-detached').on('affix.bs.affix', function() {
		initScroll();
		resizeDetached();
	});

    // When effixed top, remove scrollbar and its data
    $('.sidebar-detached').on('affix-top.bs.affix', function() {
		removeScroll();

        $(".sidebar-detached .sidebar").removeAttr('style').removeAttr('tabindex');
    });

	// Attach BS affix component to the sidebar
	$('.sidebar-detached').affix({
		offset: {
			top: $('.sidebar-detached').offset().top - 20 // top offset - computed line height
		}
	});

    // Remove affix and scrollbar on mobile
    $(window).on('resize', function() {
        setTimeout(function() {            
            if($(window).width() <= 768) {

                // Remove nicescroll on mobiles
                removeScroll();

                // Remove affix on mobile
                $(window).off('.affix')
                $('.sidebar-detached').removeData('affix').removeClass('affix affix-top affix-bottom');
            }
        }, 100);
    }).resize();

    // ========================================
    //
    // Plugins
    //
    // ========================================
    
    // Tooltip
    // ------------------------------
    $('[data-popup="tooltip"]').tooltip();

    // ========================================
    //
    // Tables
    //
    // ========================================
    // Nice scroll
    // ------------------------------

    // Setup scroll on tables
	function initTableScroll() {
	    $(".table-responsive").niceScroll({
	        mousescrollstep: 100,
	        cursorcolor: '#ccc',
	        cursorborder: '',
            cursorwidth: 3,
            emulatetouch: true,
	        hidecursordelay: 100,
	        autohidemode: false,
	        horizrailenabled: true,
	        preservenativescrolling: true,
	        railpadding: {
	        	right: 0.5,
	        	top: 1.5,
                bottom: 1.5	        }
	    });
    }
    // Initialize scroll on tables
    initTableScroll();

    // Display submenu
    // -------------------------
    $(function() {
        // Display submenu when click button action from a table
        $('.btn-action-submenu').on('click', function() {
            var $menuItem = $(this),
                $submenuWrapper = $(this).parent('.btn-action').find('.action-submenu', $menuItem);
            
            // grab the menu item's position relative to its positioned parent
            var menuItemPos = $menuItem.position();
            
            // place the submenu in the correct position relevant to the action submenu item
            $submenuWrapper.css({
            top: menuItemPos.top + 30,
            left: menuItemPos.left -100
            });
        });
        // Quit submenu
        $('.btn-action').on('mouseleave', function() {
            $(this).removeClass('open');
        });									
    });

    // ========================================
    //
    // Utilities
    //
    // ========================================
    // Delete row of the tables
    // -------------------------
    $(function() {
        $('.btn-delete-tr').on('click', function() {
            $(this).parents('tr').hide("fast", function(){ $(this).remove(); })
        });								
    });

    // Delete row of the content
    // -------------------------
    $('.btn-delete-row').on('click', function() {
        $(this).parents('.row').hide("fast", function(){ $(this).remove(); });
    });	

});

// Allow CSS transitions when page is loaded
window.addEventListener('load', function() {
    $('body').removeClass('no-transitions');
});
