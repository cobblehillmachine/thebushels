$(document).ready(function() {
	// $('#splash img').each(function() {
	// 	$(this).addClass('bgimg');
	// });
	$('#splash-wrap').delay(500).fadeIn('fast');
	centerItem('#splash-wrap', 509, 368);
	//setGallerySize();
	//fullScreen();
	//setImageWidth();
	$('.blog-post').eq(0).addClass('first').end();
	$('.event-post').each(function(i) {
		if ((i + 1) % 2 == 0) {
			$(this).addClass('even');
		}
	});
	//setImageWidth();
	footerHeight();
});


$(window).resize(function() {
	//setImageWidth();
	//setGallerySize();
	//fullScreen();
	centerItem('#splash-wrap', 509, 368);
	//setImageWidth();
	footerHeight();
});

$(window).load(function() {
	//setGallerySize();
	//setImageWidth();
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

function setGallerySize() {
	var winW = $(window).width();
	$('.ngg-slideshow, .ngg-galleryoverview').css({width: winW +'px'});
}


function setImageWidth() {
	winW = $(window).width();
	imgH = $('#home-slide img').height();
    //var w = winW - 1280; 
	if(winW < 1200) {
		$('#home-slide img').css('width', 1200 +'px');
		//$('#home-slide img').css({'left': 0});
		//$('#home-slide').removeClass('img-bg');
		$('#home-slide').css('height', imgH);
	}	
 	if(winW > 1200) {
		$('#home-slide img').css('width', 100 +'%');
	    //$('#home-slide img').css({'left': w/2});
	    //$('#home-slide').addClass('img-bg');
		//$('#home-slide').css('height', 600);
		//$('#home-slide img').css('height', 600);
		//$('#about-cont').css({'margin-top': 420});
	}
	
}


