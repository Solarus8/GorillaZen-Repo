$(function() {
		var container_width = $('body').find('.container').width();
		if (container_width < 1170){

	
		/* Mobile */
		$('#menu-wrap').addClass('mobile').find('#menu-trigger').show();		
		
		$('.mobile #menu-trigger').on('click touchstart',
			function() {
			var catUl = $(this).next('ul#menu-custom');
			var anotherFirst = $('.header-button').find('ul');
			var anotherSecond = $('#header').find('#cart_block');
			if (anotherFirst.is(':visible')) {
				anotherFirst.slideUp(),
				$('.header-button').find('.arrow_header_top').removeClass('mobile-open')
			}
			if (anotherSecond.is(':visible')) {
				anotherSecond.slideUp();
				$('#header_user').removeClass('close-cart')
			}
			if(catUl.is(':hidden')) {
				catUl.slideDown(),
				$(this).addClass('menu-custom-icon')	
			}
			else {
				catUl.slideUp(),
				$(this).removeClass('menu-custom-icon');
			}
			return false
		}
		)
		$('#menu-wrap.mobile #menu-custom').on('click touchstart', function(e){
			e.stopPropagation();
		});
		
		$ ('.main-mobile-menu ul ul').addClass('menu-mobile-2'); 
		$ ('#menu-custom ul ').addClass('menu-mobile-2'); 
		$('#menu-custom  li').has('.menu-mobile-2').prepend('<span class="open-mobile-2"></span>');
		$("#menu-custom   .open-mobile-2").toggle(
			function() {
				$(this).next().next('.menu-mobile-2').slideToggle("slow"),{
					duration: 'slow',
					easing: 'linear'
				};
				$(this).addClass('mobile-close-2');
			},
			function() {
				$(this).next().next('.menu-mobile-2').slideToggle("slow"),{
					duration: 'slow',
					easing: 'linear'
				};
				$(this).removeClass('mobile-close-2');
			})
		$(document).on('click  touchstart', function(){
			$('.mobile #menu-trigger').removeClass('menu-custom-icon').next('ul#menu-custom').slideUp();	
		})
			}
		if (container_width > 1170){
			$('#menu-wrap').removeClass('mobile'),
			$('#menu-wrap').find('#menu-trigger').hide();			
		}
		
}); 


 


