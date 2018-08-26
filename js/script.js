/*jslint browser: true*/
/*global $, jQuery, alert*/
$(document).ready(function(){
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

});