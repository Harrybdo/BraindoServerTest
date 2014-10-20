/*jshint devel:true */
/*global Modernizr:true */

$(document).foundation();


var maxSmall = Modernizr.mq('only all and (max-width: 40em)');
var maxMedium = Modernizr.mq('only all and (max-width: 64em)');
var maxMedium = Modernizr.mq('only all and (max-width: 64em)')
var maxLarge = Modernizr.mq('only all and (max-width: 10000em)');

var isSmall = maxSmall;
var isMedium = maxMedium&&!maxLarge;
var isLarge = maxLarge&&!maxMedium;

if(isSmall){

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

function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        if (decodeURIComponent(pair[0]) == variable) {
            return decodeURIComponent(pair[1]);
        }
    }
	console.log('Query variable %s not found', variable);
}

function _serviceDisplay(param){
	var service = getQueryVariable(param);
	//alert(service);
	$(".servicePanel").each(function(){
		if($(this).attr("id").match(new RegExp(service,"i"))){
			$(this).show();
		}
	});
}

$(".expertiseBlock").click(function(){
	var clickedBlock = $(this).attr("id").match(/expertiseBlock(\d)/i)[1];
	alert(clickedBlock);
	$("#expertise-expanded").animate({opacity:0}, 500, function() {
	});
	
	//switch out the text
	
	$("#expertise-expanded").animate({opacity:1}, 500, function() {
	});
});
