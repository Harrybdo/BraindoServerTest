$(document).ready(function(){
  setNavigation();
});

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

var braindoRed = "#a53400";
var braindoYellow = "#a58800";
var braindoDarkBlue = "#014048";
var braindoGreen = "#557701";
var braindoTeal = "#0080a5";

var pastActiveSlider;
var slideState = [];

function getPixels(rem){
  var htmlFontSize = $("html").css('font-size');
  var htmlFontNum = parseInt(htmlFontSize);
  return (rem*htmlFontNum+"px");
}

function setNavigation() {
  var path = window.location.pathname;
  path = path.replace(/\/$/, "");
  path = decodeURIComponent(path);

  $("nav.top-bar ul li a").each(function () {
      var href = $(this).attr('href');
      if (path.substring(0, href.length) === href) {
          $(this).closest('li').addClass('active');
      }
  });
}

if(isSmall){
  $(".expertiseBlock").click(function(e){
      e.preventDefault();
      $(this).closest("li").next(".small-slider").slideToggle(500,function(){
         if ($(this).is(':visible'))
         $(this).css('display','inline-block');
      });
      //attr('style','display: block !important');
  }); 
}

$(".employee-block").click(function(){	
	var blockNumber = $(this).attr("id").match(/employee-block-(\d\d?)/i)[1];
	slideState[blockNumber] = false;
	
	if(slideState.indexOf(true) != -1){
    //do nothing, something is sliding
  }else{
    if(typeof pastActiveSlider != typeof undefined){
  		$(pastActiveSlider).slideUp(1000,function(){
  			$("div[id='employee-slider-"+blockNumber+"']").slideDown(1000,function(){
    		  slideState[blockNumber] = false;
    		  pastActiveSlider = $("div[id='employee-slider-"+blockNumber+"']");
    		});
  		});
  		slideState[blockNumber] = true;
    }else{
  		$("div[id='employee-slider-"+blockNumber+"']").slideDown(1000,function(){
    		slideState[blockNumber] = false;
    		pastActiveSlider = $("div[id='employee-slider-"+blockNumber+"']");
  		});
  		slideState[blockNumber] = true;
    }
  }
});

function getQueryVariable(variable, defaultQuery) {
    var query = window.location.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        if (decodeURIComponent(pair[0]) == variable) {
            return decodeURIComponent(pair[1]);
        }
    }
  //if no query var, make it strategy by default
	return defaultQuery;
}

function getBlock(blockName){
  switch(blockName){
    case "strategy":
      return $("#expertiseBlock0");
      break;
            
    case "analytics":
      return $("#expertiseBlock1");
      break;
    
    case "development":
      return $("#expertiseBlock2");
      break;
      
    case "searchmedia":
      return $("#expertiseBlock3");
      break;
    
    case "creative":
      return $("#expertiseBlock4");
      
    case "default":
      return $("#expertiseBlock0");
      break; 
  } 
}

function _serviceDisplay(param){
	var service = getQueryVariable(param,"strategy");
	
	var currentBlock = getBlock(service);
  var xPos = $(currentBlock).position().left;
  var boxWidth = $(currentBlock).width();
	
	$(".servicePanel").each(function(){
		if($(this).attr("id").match(new RegExp(service,"i"))){
  		//alert("match!");
			$(this).attr('style','display: block !important');
			$(".triangle").css("margin","0 0 0 "+(xPos+(boxWidth/2)-20)+"px");
			$(".triangle").css("border-color", getColorUpdate(service)+" transparent");
      $(".expertise-expanded").css("border-color",getColorUpdate(service));			
		}
	});
}

function getServicePanel(blockNum){
   var paneldivs = $(".servicePanel");
   var panelToShow = paneldivs[blockNum];
   return panelToShow;
}

function getColorUpdate(clickedBlock){
  switch(clickedBlock){
    
    case "0": //red
    case "strategy":
      return braindoRed;
      break;
      
    case "1": //yellow
    case "analytics":
      return braindoYellow;
      break;
    
    case "2": //Dark Blue
    case "development":
      return braindoDarkBlue;
      break;
    
    case "3": //green
    case "search":
      return braindoGreen;
      break;
    
    case "4": //teal
    case "creative":
      return braindoTeal;
      break;
      
    default:
      return 0;
      break;
  }
  return null;
  
}

if(location.pathname.match(/services/i)){
  $(".expertiseBlock").click(function(event){
    event.preventDefault();
  	var clickedBlock = $(this).attr("id").match(/expertiseBlock(\d)/i)[1];

  	//fade out current services
  	$(".servicePanel").animate({opacity:0}, 1000, function() {
      $(".servicePanel").attr('style','display: none !important');
    	var clickedService = getServicePanel(clickedBlock);
    	$(clickedService).attr('style','display: block !important');
  	});
  	
  	var xPos = $(this).position().left;
  	var boxWidth = $(this).width();
  	
    $(".triangle").animate({margin:"0 0 0 "+(xPos+(boxWidth/2)-20), borderTopColor: getColorUpdate(clickedBlock)},1000, function(){
            $(".servicePanel").animate({opacity:1}, 500);
    });
    $(".expertise-expanded").animate({borderTopColor: getColorUpdate(clickedBlock)},1000);	
  
  	//alert(getMarginUpdate(clickedBlock));
  	
  });
}

if(location.pathname.match(/contact/i)){
  // GOOGLE MAP DEFAULT LOCATION - PHILADELPHIA //
  var map;
  function initialize() {
    var myLatLng = new google.maps.LatLng(39.959054, -75.151483);
  	var mapOptions = {
      zoom: 14,
  		center: myLatLng,
  		mapTypeControl: true,
  		mapTypeControlOptions: {
  			style: google.maps.MapTypeControlStyle.DEFAULT
  		},
  		zoomControl: true,
  		zoomControlOptions: {
  			style: google.maps.ZoomControlStyle.DEFAULT
  		}
  	};
  			
  	map = new google.maps.Map(document.getElementById("googleMap"),mapOptions);
  	
  	var infoWindowContent = '<div class="info-window">'+
  		'<div class="mapAddress">'+
  		'<div class="cityName">BrainDo</div>'+
  		'<div class="cityAddress">417 North 8th St, Suite 201<br>Philadelphia, PA 19123</div>'+
  		'</div>'+
  		'</div>';
  		
  	var infoWindow = new google.maps.InfoWindow({
  		content: infoWindowContent
  	});
  				
  	var marker = new google.maps.Marker({
  		position: myLatLng,
  		map: map,
  		title:"BrainDo"
  	});
  	
  	google.maps.event.addListener(marker, 'click', function() {
  		infoWindow.open(map,marker);
  	});
  }
  google.maps.event.addDomListener(window, 'load', initialize);
}
