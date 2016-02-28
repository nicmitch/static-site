
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


	$('.flip').on('click', function(){
		$(this).parents('.flip-container').toggleClass('flipMe');
	});


	$('.goTo').click(function(event) {
		event.preventDefault();
		var desti = $(this).attr('href');
		
		if(desti !== "#") {
			$('html, body').stop().animate({
				scrollTop: $(desti).position().top - headerH
			}, 1000, "easeInOutQuint");
		}
	});


	// Slider settings
	$("#reference-slider").slick({
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

	$('#intro-bg').adaptImg({
		contPos: 'fixed'
	});


	var s = skrollr.init({
		smoothScrolling: true,
		mobileDeceleration: 0.004,     
        mobileCheck: function() {
            //hack - forces mobile version to be off
            return false;
        }
	});


	if($('#ProductsSelector').length > 0){

		var labelText = $('#ProductsSelector').attr('data-label');

	    $('#ProductsSelector').multiselect({
	    	templates: {
	            button: '<button type="button" class="multiselect dropdown-toggle" data-toggle="dropdown">'+labelText+' <span class="icon"></span></button>'
	        }
	    });
	}


});