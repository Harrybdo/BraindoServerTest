/*jshint devel:true */
<<<<<<< HEAD
/*global Modernizr:true */
=======

>>>>>>> aba7fc81efa26367aeb5d396370cf47d98baa6e4
$(document).foundation();


var maxSmall = Modernizr.mq('only all and (max-width: 40em)');
<<<<<<< HEAD
var maxMedium = Modernizr.mq('only all and (max-width: 64em)');
=======
var maxMedium = Modernizr.mq('only all and (max-width: 64em)')
>>>>>>> aba7fc81efa26367aeb5d396370cf47d98baa6e4
var maxLarge = Modernizr.mq('only all and (max-width: 10000em)');

var isSmall = maxSmall;
var isMedium = maxMedium&&!maxLarge;
var isLarge = maxLarge&&!maxMedium;

if(isSmall){
<<<<<<< HEAD
	
	$.each($("#row3 .expertiseBlock"), function(index, value){
		$(value).click(function(){
			$(value).next(".show-for-small-only").children(".expertiseBlockSlider").slideToggle(500);
		});
	});
	
=======
	$.each($("#row3 .expertiseBlock"), function(index, value){
		$(value).click(function(){
			$(value).next().slideToggle(500);
		});
	});

>>>>>>> aba7fc81efa26367aeb5d396370cf47d98baa6e4
	$("#enableModal").click(function(){
		$(document).scrollTop(0);
		$("body").bind('touchmove', function(e) {
			e.preventDefault();
		});
	});

	$(".close-reveal-modal").click(function(){
		$("body").unbind('touchmove');
	});
}