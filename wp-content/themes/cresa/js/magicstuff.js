//JavaScript for final project ctec 126 - Hey Bruce

//loading... please wait..
$(document).ready(function(){

//SLIMMENU STUFF on all pages
	$('#navigation').slimmenu(
		{
		resizeWidth: '950',
		collapserTitle: 'Main Menu',
		animSpeed: 'medium',
		easingEffect: null,
		indentChildren: false,
		childrenIndenter: '&nbsp;'
	});
//END slimmenu stuff see http://adnantopal.github.io/slimmenu/

//FONT CHANGE STUFF on all pages

	var originalSize = $('section').css('font-size');
		// reset
		$(".resetsize").click(function(){
		$('section').css('font-size', originalSize); 

		});

		// Increase Font Size
		$(".increase").click(function(){
			var currentSize = $('section').css('font-size');
			var currentSize = parseFloat(currentSize)*1.2;
			$('section').css('font-size', currentSize);

			return false;
		});

		// Decrease Font Size
		$(".decrease").click(function(){
			var currentFontSize = $('section').css('font-size');
			var currentSize = $('section').css('font-size');
			var currentSize = parseFloat(currentSize)*0.8;
			$('section').css('font-size', currentSize);

			return false;
		});
//End font size change see http://www.technicalkeeda.com/

	
	
//See Gallery page for fancybox script http://fancyapps.com/fancybox/






}); //end loading..