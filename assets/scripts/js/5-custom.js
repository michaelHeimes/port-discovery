jQuery( document ).ready(function($) {
	
	var _app = window._app || {};
		
	_app.emptyParentLinks = function() {
			
		$('.menu li a[href="#"]').click(function(e) {
		    e.preventDefault ? e.preventDefault() : e.returnValue = false;
		});	
		
	};
	
	_app.fixed_nav_hack = function() {		
		$('.off-canvas').on('opened.zf.offCanvas', function() {
			$('header.header').addClass('off-canvas-content is-open-right has-transition-push');			
		});
		
		$('.off-canvas').on('close.zf.offCanvas', function() {
			$('header.header').removeClass('off-canvas-content is-open-right has-transition-push');
		});
		
		$(window).on('resize', function() {
			if ($(window).width() > 1023) {
				$('.off-canvas').foundation('close');
				$('header.header').removeClass('off-canvas-content has-transition-push');
			}
		});
	}
	
	_app.nested_tabs = function() {
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
			
	_app.init = function() {
		
		// Standard Functions
		_app.emptyParentLinks();
		_app.fixed_nav_hack();
		_app.nested_tabs();
	}


	// initialize functions on load
	$(function() {
		_app.init();
	});

});