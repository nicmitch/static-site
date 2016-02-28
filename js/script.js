
var wW;
var wH;
var wScrollTop;
var topCheckPoint = 100;
var headerH = 0;


function checkData(){
	
	wW = $(window).width();
	wW = $(window).height();
	wScrollTop = $(window).scrollTop();
	
	resizeHeader();

	headerH = $('#header-main').height();
}

function resizeHeader(){

	if(!$('body').hasClass('topCheckPoint')){
		if(wScrollTop > topCheckPoint){
			$('body').addClass('topCheckPoint');
		}
	}

};


$(window).scroll(function(){
	
	checkData();
	

});

$(window).resize(function(){
	
	checkData();

	if(wW >= 970 && $("body").hasClass("openMobileMenu")){
		$("body").removeClass("openMobileMenu");
	}

});


$(document).ready(function(){
	
	checkData();

	$('.goTo').click(function(event) {
		event.preventDefault();
		var desti = $(this).attr('href');
		
		if(desti !== "#") {
			$('html, body').stop().animate({
				scrollTop: $(desti).position().top - headerH
			}, 1000, "easeInOutQuint");
		}
	});

	/*
	// Slider settings
	$("#main-slider").slick({
		autoplay: true,
		autoplaySpeed: 5000,
		cssEase: 'cubic-bezier(0.860,0,0.070,1)',
        useTransform: true,
		dots: true,
		arrows: false,
		infinite: true,
		speed: 800,
		slidesToShow: 1,
		slidesToScroll: 1
	});
*/
/*
	$('#intro-bg').adaptImg({
		contPos: 'fixed'
	});
*/


});