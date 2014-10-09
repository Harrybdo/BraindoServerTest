/*jshint devel:true */

$(document).foundation();


var maxSmall = Modernizr.mq('only all and (max-width: 40em)');
var maxMedium = Modernizr.mq('only all and (max-width: 64em)')
var maxLarge = Modernizr.mq('only all and (max-width: 10000em)');

var isSmall = maxSmall;
var isMedium = maxMedium&&!maxLarge;
var isLarge = maxLarge&&!maxMedium;

if(isSmall){
	$.each($("#row3 .expertiseBlock"), function(index, value){
		$(value).click(function(){
			$(value).next().slideToggle(500);
		});
	});

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