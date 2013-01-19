$(document).ready(function() {
	// $('#splash img').each(function() {
	// 	$(this).addClass('bgimg');
	// });
	fullScreen();
	centerItem('#splash-wrap', 509, 368);
	$('.blog-post').eq(0).addClass('first').end();
	$('.event-post').each(function(i) {
		if ((i + 1) % 2 == 0) {
			$(this).addClass('even');
		}
	});
	footerHeight();
});


$(window).resize(function() {
	fullScreen();
	centerItem('#splash-wrap', 509, 368);
	footerHeight();
});

$(window).load(function() {
	footerHeight();
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

function footerHeight(){
var footer = $('#footer-bottom'),
windowHeight = $(window).height(),
combinedHeight = footer.offset().top + 125,
height = (windowHeight > combinedHeight) ? windowHeight - footer.offset().top : 125;
// height = windowHeight - footer.offset().top;

footer.css({'height':height});
}
