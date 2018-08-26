/*jslint browser: true*/
/*global $, jQuery, alert*/
jQuery(document).ready(function($){
	if(document.body.clientWidth>=992){
		listSize();
	}else{
		smallDevice();
	}
	$( window ).resize(function() {
		if(document.body.clientWidth>=992){
			listSize();
		}else{
			smallDevice();
		}

});
	function listSize() {
		$("#beyaz").off('click');
		$("#elektronik").off('click');
		$("#evAletleri").off('click');
		$("#mobilya").off('click');
		$("#zuccaciye").off('click');
		$("#evTekstil").off('click');
		$("#bebek").off('click');
		$("#spor").off('click');
			$('#back-button').addClass('hide-list');
			$('#nav-button').removeClass('hide-list');
			$('side-menu').removeClass('hide-list');
				$("#beyaz").hover(function(){
					$('#first-element').addClass('show-list');
					$('#carouselID').addClass('hide-list');
				}, function(){
					$('#first-element').removeClass('show-list');
					$('#carouselID').removeClass('hide-list');
				});

				$("#elektronik").hover(function(){
					$('#second-element').addClass('show-list');
					$('#carouselID').addClass('hide-list');
				}, function(){
					$('#second-element').removeClass('show-list');
					$('#carouselID').removeClass('hide-list');
				});

				$("#evAletleri").hover(function(){
					$('#third-element').addClass('show-list');
					$('#carouselID').addClass('hide-list');
				}, function(){
					$('#third-element').removeClass('show-list');
					$('#carouselID').removeClass('hide-list');
				});

				$("#mobilya").hover(function(){
					$('#fourth-element').addClass('show-list');
					$('#carouselID').addClass('hide-list');
				}, function(){
					$('#fourth-element').removeClass('show-list');
					$('#carouselID').removeClass('hide-list');
				});

				$("#zuccaciye").hover(function(){
					$('#fifth-element').addClass('show-list');
					$('#carouselID').addClass('hide-list');
				}, function(){
					$('#fifth-element').removeClass('show-list');
					$('#carouselID').removeClass('hide-list');
				});

				$("#evTekstil").hover(function(){
					$('#sixth-element').addClass('show-list');
					$('#carouselID').addClass('hide-list');
				}, function(){
					$('#sixth-element').removeClass('show-list');
					$('#carouselID').removeClass('hide-list');
				});

				$("#bebek").hover(function(){
					$('#seventh-element').addClass('show-list');
					$('#carouselID').addClass('hide-list');
				}, function(){
					$('#seventh-element').removeClass('show-list');
					$('#carouselID').removeClass('hide-list');
				});

				$("#spor").hover(function(){
					$('#eighth-element').addClass('show-list');
					$('#carouselID').addClass('hide-list');
				}, function(){
					$('#eighth-element').removeClass('show-list');
					$('#carouselID').removeClass('hide-list');
				});
	}
	function smallDevice(){
		$("#beyaz").unbind('mouseenter mouseleave');
		$("#elektronik").unbind('mouseenter mouseleave');
		$("#evAletleri").unbind('mouseenter mouseleave');
		$("#mobilya").unbind('mouseenter mouseleave');
		$("#zuccaciye").unbind('mouseenter mouseleave');
		$("#evTekstil").unbind('mouseenter mouseleave');
		$("#bebek").unbind('mouseenter mouseleave');
		$("#spor").unbind('mouseenter mouseleave');
		var idName;
		$("#beyaz").click(function(){
				idName = $('#first-element');
				$('#back-button').removeClass('hide-list');
				$('#nav-button').addClass('hide-list');
				$('#side-menu').addClass('hide-list');
				$('#first-element').addClass('show-list');
				$('#carouselID').addClass('hide-list');
		});
		$("#elektronik").click(function(){
				idName = $('#second-element');
				$('#back-button').removeClass('hide-list');
				$('#nav-button').addClass('hide-list');
				$('#side-menu').addClass('hide-list');
				$('#second-element').addClass('show-list');
				$('#carouselID').addClass('hide-list');
		});
		$("#evAletleri").click(function(){
				idName = $('#third-element');
				$('#back-button').removeClass('hide-list');
				$('#nav-button').addClass('hide-list');
				$('#side-menu').addClass('hide-list');
				$('#third-element').addClass('show-list');
				$('#carouselID').addClass('hide-list');
		});
		$("#mobilya").click(function(){
				idName = $('#fourth-element');
				$('#back-button').removeClass('hide-list');
				$('#nav-button').addClass('hide-list');
				$('#side-menu').addClass('hide-list');
				$('#fourth-element').addClass('show-list');
				$('#carouselID').addClass('hide-list');
		});
		$("#zuccaciye").click(function(){
				idName = $('#fifth-element');
				$('#back-button').removeClass('hide-list');
				$('#nav-button').addClass('hide-list');
				$('#side-menu').addClass('hide-list');
				$('#fifth-element').addClass('show-list');
				$('#carouselID').addClass('hide-list');
		});
		$("#evTekstil").click(function(){
				idName = $('#sixth-element');
				$('#back-button').removeClass('hide-list');
				$('#nav-button').addClass('hide-list');
				$('#side-menu').addClass('hide-list');
				$('#sixth-element').addClass('show-list');
				$('#carouselID').addClass('hide-list');
		});
		$("#bebek").click(function(){
				idName = $('#seventh-element');
				$('#back-button').removeClass('hide-list');
				$('#nav-button').addClass('hide-list');
				$('#side-menu').addClass('hide-list');
				$('#seventh-element').addClass('show-list');
				$('#carouselID').addClass('hide-list');
		});
		$("#spor").click(function(){
				idName = $('#eighth-element');
				$('#back-button').removeClass('hide-list');
				$('#nav-button').addClass('hide-list');
				$('#side-menu').addClass('hide-list');
				$('#eighth-element').addClass('show-list');
				$('#carouselID').addClass('hide-list');
		});
		$("#back-button").click(function(){
			$('#back-button').addClass('hide-list');
			$('#nav-button').removeClass('hide-list');
			$('#side-menu').removeClass('hide-list');
			idName.removeClass('show-list');
			$('#carouselID').removeClass('hide-list');
		});
	}
});
