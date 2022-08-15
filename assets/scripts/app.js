/**
 * Required
 */
 
 //@prepros-prepend vendor/foundation/js/plugins/foundation.core.js

/**
 * Optional Plugins
 * Remove * to enable any plugins you want to use
 */
  
 // Foundation Utilities
 // https://get.foundation/sites/docs/javascript-utilities.html
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.box.min.js
 ////@*prepros-prepend vendor/foundation/js/plugins/foundation.util.imageLoader.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.keyboard.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.mediaQuery.min.js
 ////@*prepros-prepend vendor/foundation/js/plugins/foundation.util.motion.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.nest.min.js
 ////@*prepros-prepend vendor/foundation/js/plugins/foundation.util.timer.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.touch.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.triggers.min.js


// JS Form Validation
//@prepros-prepend vendor/foundation/js/plugins/foundation.abide.js

// Accordian
//@prepros-prepend vendor/foundation/js/plugins/foundation.accordion.js
//@prepros-prepend vendor/foundation/js/plugins/foundation.accordionMenu.js
//@*prepros-prepend vendor/foundation/js/plugins/foundation.responsiveAccordionTabs.js

// Menu enhancements
//@prepros-prepend vendor/foundation/js/plugins/foundation.drilldown.js
////*@prepros-prepend vendor/foundation/js/plugins/foundation.dropdown.js
//@prepros-prepend vendor/foundation/js/plugins/foundation.dropdownMenu.js
//@prepros-prepend vendor/foundation/js/plugins/foundation.responsiveMenu.js
////@*prepros-prepend vendor/foundation/js/plugins/foundation.responsiveToggle.js

// Equalize heights
////@*prepros-prepend vendor/foundation/js/plugins/foundation.equalizer.js

// Responsive Images
//@*prepros-prepend vendor/foundation/js/plugins/foundation.interchange.js

// Navigation Widget
////@*prepros-prepend vendor/foundation/js/plugins/foundation.magellan.js

// Offcanvas Navigation Option
//@prepros-prepend vendor/foundation/js/plugins/foundation.offcanvas.js

// Carousel (don't ever use)
////@*prepros-prepend vendor/foundation/js/plugins/foundation.orbit.js

// Modals
//@*prepros-prepend vendor/foundation/js/plugins/foundation.reveal.js

// Form UI element
////@*prepros-prepend vendor/foundation/js/plugins/foundation.slider.js

// Anchor Link Scrolling
//@prepros-prepend vendor/foundation/js/plugins/foundation.smoothScroll.js

// Sticky Elements
//@prepros-prepend vendor/foundation/js/plugins/foundation.sticky.js

// Tabs UI
//@prepros-prepend vendor/foundation/js/plugins/foundation.tabs.js

// On/Off UI Switching
////@*prepros-prepend vendor/foundation/js/plugins/foundation.toggler.js

// Tooltips
////@*prepros-prepend vendor/foundation/js/plugins/foundation.tooltip.js


/**
 * Vendor
 */

// What Input
//@prepros-prepend vendor/what-input.js

// Isotope
//@prepros-prepend vendor/isotope.pkdg.js

// Swiper
//@prepros-prepend vendor/swiper-bundle.js

// DOM Ready
(function($) {
	'use strict';
    
    var _app = window._app || {};
    
    _app.foundation_init = function() {
        $(document).foundation();
    }
        
    _app.emptyParentLinks = function() {
            
        $('.menu li a[href="#"]').click(function(e) {
            e.preventDefault ? e.preventDefault() : e.returnValue = false;
        });	
        
    };
    
    _app.fixed_nav_hack = function() {
        
            
            $('.off-canvas').on('opened.zf.offCanvas', function() {
                $('header.site-header').addClass('off-canvas-content is-open-right has-transition-push');			
            });
            
            $('.off-canvas').on('close.zf.offCanvas', function() {
                $('header.site-header').removeClass('off-canvas-content is-open-right has-transition-push');
            });
            
            $(window).on('resize', function() {
                if ($(window).width() > 1023) {
                    $('.off-canvas').foundation('close');
                    $('header.site-header').removeClass('off-canvas-content has-transition-push');
                }
            });
    
    }
    
    _app.nested_tabs = function() {
        if(  $('.accordion-sidebar').length ) {
            $('.accordion-sidebar').each(function(e) {
                const $this = $(this);
                const $tabNav = $this.find('.tabs-title a');
                const $tabCont = $this.find('.tabs-panel');
                
                $($tabNav).click(function () {
                    const $target = $(this).attr('aria-controls');
                    
                    $($tabNav).each(function(e) {
                        if( $(this).attr('aria-controls') !== $target ) {
                            $(this).attr('aria-selected', false);
                            $(this).parent().removeClass('is-active');
                            
                        }
                    });
                    
                    $($tabCont).each(function(e) {
                        if( $(this).attr('id') == $target ) {
                            $(this).siblings().removeClass('is-active');
                        }
                    });
                });
        
            });
        }
    }
    
    _app.preview_cards = function() {
        
        if( $('.opa-card').length ) {
            $('.opa-card').each(function(){
                
                $(this).click(function(e){
                    
                    const $target_attr = $(this).data('card-target');
                    
                    $('.previews').show();
                    
                    $('.preview-card').each(function(){
                        if($(this).attr('id') ==  $target_attr ){
                            $(this).show();
                        }
                    });
        
                    $('.tabs-panel .grid-x').css('visibility', 'hidden');
                    
                });
                
            });
            
            $('.preview-card .close-button, .open-play-areas .tabs-title a').click(function(e){
                e.preventDefault();
                $('.preview-card').hide();
                $('.previews').hide();
                $('.tabs-panel .grid-x').css('visibility', 'visible');
            });
            
            $('.open-play-areas .tabs-title a').click(function(){
                
            });  
        
        }
        
    }

    _app.archives = function() {
        if($('body').is('.blog, .archive')) {
            var $container = $('.isotope').isotope({
                itemSelector: '.isotope article',
                layoutMode: 'masonry',
            });
            
            $container.addClass('init');
            
            var initShow = 3; //number of items loaded on init & onclick load more button
              var counter = initShow; //counter for load more button
              var iso = $container.data('isotope'); // get Isotope instance
            
              loadMore(initShow); //execute function onload
            
              function loadMore(toShow) {
                $container.find(".hidden").removeClass("hidden");
            
                var hiddenElems = iso.filteredItems.slice(toShow, iso.filteredItems.length).map(function(item) {
                  return item.element;
                });
                $(hiddenElems).addClass('hidden');
                $container.isotope('layout');
            
                //when no more to load, hide show more button
                if (hiddenElems.length == 0) {
                  jQuery(".lm-btn-wrap").hide();
                } else {
                  jQuery(".lm-btn-wrap").show();
                };
            
              }
            
              //append load more button
              //$container.after('<button id="load-more"> Load More</button>');
            
              //when load more button clicked
              $("#load-more").click(function() {
            
                counter = counter + initShow;
            
                loadMore(counter);
              });
            
              //when filter button clicked
              $("#filters").click(function() {
                $(this).data('clicked', true);
            
                loadMore(initShow);
              });
        }
        
    }
    
    _app.gallery_slider = function() {
        

        
        if( $('.gallery-slider').length ) {
            
            const swiper = new Swiper('.gallery-slider .swiper-container', {
                // Optional parameters
                loop: true,
                slidesPerView: "auto",
                speed: 1000,
                spaceBetween: 26,
                autoplay: {
                  delay: 5000,
                  disableOnInteraction: false,
                },
            });
            
            $('.gallery-slider .swiper-container').each(function(i, e){
                const $progress = $(this).find('.progress');
            });
            

            
            // swiper.on('slideChangeTransitionEnd', function () {
            //   console.log('slide changed');
            // });
            
            $(".gallery-slider .swiper-container").each(function(index, element) {
                const $this = $(this);
                const swiper = this.swiper;
                swiper.update();
                $($this).next().addClass('play-progress');
                swiper.on('slideChange', function () {
                    $($this).next().removeClass('play-progress');
                });
                swiper.on('slideChangeTransitionEnd', function () {
                    $($this).next().addClass('play-progress');
                });
            });
            

            

        
        }
        
    }   


    _app.gallery_list_slider = function() {
        
    
        
        if( $('.list-gallery-slider-list').length ) {
            
            const swiper = new Swiper('.list-gallery-slider-list .swiper-container', {
                // Optional parameters
                loop: true,
            
            // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                },
            
                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            
            });
            
            $(".list-gallery-slider-list .swiper-container").each(function(index, element){
                const swiper = this.swiper;
                swiper.update();
            });
        
        }
        
    } 
     
     
    _app.init = function() {
        
        // Standard Functions
        _app.foundation_init();
        _app.emptyParentLinks();
        _app.fixed_nav_hack();
        
        // Theme Functions
        _app.nested_tabs();
        _app.preview_cards();
        _app.archives();
        _app.gallery_slider();
        _app.gallery_list_slider();
    }
    
    
    // initialize functions on load
    $(function() {
        _app.init();
    });
	
	
})(jQuery);