
	$(document).ready(function() {
        $('.about-detailsSlider').owlCarousel({
            margin:29,
            responsiveClass:true,
            responsive:{
               0:{
                 items:1,
                 nav:true,
                 autoplay:true
               },
                431:{
                    items:2,
                    loop:true,
                    nav:true,
                    autoplay:true,
                    margin:10
                },
                992:{
                    items:3,
                    nav:true,
                    loop:false,
                    mouseDrag:false,
                }
                    }
            
       });
        
       $('.banner-slider').owlCarousel({
            loop:true,
            autoplay:true,
            dots:true,
            items:1,
     });
        
       $('.info-slider').owlCarousel({
            loop:true,
            autoplay:true,
            responsiveClass:true,
            nav:false,
            mouseDrag:false,
            margin:90,
            responsive:{
                0:{
                    items:1,
                    nav:true,
                    margin:30
                   
                },
                431:{
                    items:2,
                    nav:true,
                    margin:30
                },
                600:{
                    items:3,
                    loop:true,
                    mouseDrag:true,
                    nav:true,
                    margin:30
                },
                1200:{
                    items:4,
                    loop:false
                }
            }
      });
        
        //bootstrap Tooltip
		$('[data-toggle="tooltip"]').tooltip();
		
		// onOff btn checked
		$('.bullet .onOff input:checkbox').change(function(){
		    if($(this).is(":checked")) {
		        $(this).parents('.bullet').addClass('checked');
		    } else {
		        $(this).parents('.bullet').removeClass('checked');
		    }
		});
		
	});
	
	//header shrink
	$(function(){
		var shrinkHeader = 2;
		$(window).scroll(function() {
			var scroll = getCurrentScroll();
			if ( scroll >= shrinkHeader ) {
				$('.shrinkHeader').addClass('shrinked');
			} else {
				$('.shrinkHeader').removeClass('shrinked');
			}
		});
		function getCurrentScroll() {
		    return window.pageYOffset || document.documentElement.scrollTop;
	    }
	});
		
	 //windowHeight
	function windowHeight() {
		var wh = $(window).height();
		$('.winHeight').css({height:wh})
	}
	
	// equal height of 2 section
	function equalHeight() {
		var highestCol = Math.max($('.class1').height(),$('.class2').height());
		$('.class1, .class2').css({minHeight: highestCol});
	}
	
	// same height multiple block
	function sameHeight() {
		
	}
	// Footer Fixed
	function footerarea_css() {
		var window_height_for_footer = parseInt($(window).height());
		var document_height_for_footer = parseInt($('html body').outerHeight(true));
		if(document_height_for_footer < window_height_for_footer) {
			$('.footer').css('position', 'fixed').css('display', 'block').css('bottom', '0').css('left', '0').css('right', '0');
		} else {
			$('.footer').css('position', 'relative').css('display', 'block');
		}
	}
	// custom function init
	$(window).resize(function () {
		footerarea_css();
		windowHeight();
		equalHeight();
		sameHeight();
	});
	$(document).ready(function() {
		footerarea_css();
		windowHeight();
		equalHeight();
		sameHeight()
	});