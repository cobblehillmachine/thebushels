$(document).ready(function() {
	// $('#splash img').each(function() {
	// 	$(this).addClass('bgimg');
	// });
	centerItem('#splash-wrap', 509, 368);
	fullScreen();
	//setImageWidth();
	$('.blog-post').eq(0).addClass('first').end();
	$('.event-post').each(function(i) {
		if ((i + 1) % 2 == 0) {
			$(this).addClass('even');
		}
	});
	footerHeight();
});


$(window).resize(function() {
	//setImageWidth();
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

function setImageWidth() {
	winW = $(window).width();
	imgH = $('.panel img').height();
	imgW = $('.panel img').width();
    //var w = winW - 1280; 
	if(winW < 1280) {
		$('.panel img').css('width', imgW);
		$('.panel img').css({'left': 0});
	//	$('#img-cont').removeClass('img-bg');
	//	$('#img-cont').css('height', imgH);
	}	
 	if(winW > 1280) {
		$('.panel img').css('width', 1280);
	    //$('.panel img').css({'left': w/2});
	    //$('#img-cont').addClass('img-bg');
		//$('#img-cont').css('height', 492);
		//$('#about-cont').css({'margin-top': 420});
	}
	
}
