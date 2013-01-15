$(document).ready(function() {
	fullScreen();
	centerItem('#splash-wrap', 509, 368);
});


$(window).resize(function() {
	fullScreen();
	centerItem('#splash-wrap', 509, 368);
});

function fullScreen(){
	var FullscreenrOptions = { width: 900, height: 600, bgID: '.bgimg' };
	jQuery.fn.fullscreenr(FullscreenrOptions);
}

function centerItem(item,iWidth,iHeight){  
   windowWidth = $(window).width();
   windowHeight = $(window).height();
   var w = windowWidth - iWidth; 
   var h = windowHeight - iHeight;
   $(item).css({
       'left': w/2,
       'top':h/2
   });   
 }