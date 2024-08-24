$(document).ready(function() {
	
	/*
		Aleksey Skubaev

		askubaev@gmail.com
		icq - 322253350
		Разработка шаблонов для DLE и кроссбраузерная верстка
		------------------
		Необходимые jQuery скрипты.
	
	*/
	
	$('.left-menu h3').click(function(){
		$(this).next('.hidden-menu').slideToggle();
		$(this).toggleClass('left-menu2');
	});
	
	$(".login").click(function () {
		$(".login-block-hidden").fadeIn("400");
		$(".login-block-hidden1").fadeIn("400");
		$(".login-block-hidden-dark").fadeIn("400");
	});
	
	$(".login-block-hidden-dark, .close").click(function () {
		$(".login-block-hidden").fadeOut("400");
		$(".login-block-hidden1").fadeOut("400");
		$(".login-block-hidden-dark").fadeOut("400");
		
	});
	
	$('.top-menu-block li').hover(
		function() {
		$(this).find('.hidden-menu-block').css({'display':'block'});
		$(this).find('.menu-link').addClass('activ');
		$(this).find('.menu-link').find('.mini').addClass('mini-ac');
	}, function() {
		$(this).find('.hidden-menu-block').css({'display':'none'});
		$(this).find('.menu-link').removeClass('activ');
		$('.menu-link').find('.mini').removeClass('mini-ac');
	});
	
	//slaider//
	
	
	$('.slaider-block-all:first').addClass('slaider-activ').find('.slaider-block-news').fadeIn();
	$('.slaider-block-all:first').find('.slaider-block-news-mini').addClass('activ-border');
	
	function showNext() {
		clearTimeout(timerId);
		var currentBlock = $('.slaider-activ');
		var nextBlock = currentBlock.next('.slaider-block-all').length ? currentBlock.next('.slaider-block-all') : $('.slaider-block-all:first');
		currentBlock.find('.slaider-block-news').fadeOut();
		$('.slaider-block-all').removeClass('slaider-activ');
		
		
		nextBlock.find('.slaider-block-news-mini').addClass('activ-border');
		currentBlock.find('.slaider-block-news-mini').removeClass('activ-border');
		
		nextBlock.addClass('slaider-activ').find('.slaider-block-news').fadeIn(800, function () {
			timerId = setTimeout(showNext, 8000);
			});
			return false;
	};
	
	timerId = setTimeout(showNext, 8000);

	
	$('.slaider-block-news-mini').click(function() {
		clearTimeout(timerId);
		$('.slaider-block-all').removeClass('slaider-activ');
		$('.slaider-block-news').fadeOut();
		$('.slaider-block-news-mini').removeClass('activ-border');
		$(this).addClass('activ-border');
		$(this).parent().addClass('slaider-activ').find('.slaider-block-news').fadeIn();
	});
	
	
	$('.slaider-block').hover(
		function() {
		clearTimeout(timerId);
	}, function() {
		timerId = setTimeout(showNext, 3000);
	});

	
	//-slaider//
	
	$("#foo1").carouFredSel({
		circular: false,
		infinite: false,
		auto 	: false,
		prev	: {	
			button	: "#foo1_prev",
			key		: "left"
		},
		next	: { 
			button	: "#foo1_next",
			key		: "right"
		}
	});
	
	$("#foo2").carouFredSel({
		circular: false,
		infinite: false,
		auto 	: false,
		prev	: {	
			button	: "#foo2_prev",
			key		: "left"
		},
		next	: { 
			button	: "#foo2_next",
			key		: "right"
		}
	});
	
	$("#foo3").carouFredSel({
		circular: false,
		infinite: false,
		auto 	: false,
		prev	: {	
			button	: "#foo3_prev",
			key		: "left"
		},
		next	: { 
			button	: "#foo3_next",
			key		: "right"
		}
	});
	
	$("#foo4").carouFredSel({
		circular: false,
		infinite: false,
		auto 	: false,
		prev	: {	
			button	: "#foo4_prev",
			key		: "left"
		},
		next	: { 
			button	: "#foo4_next",
			key		: "right"
		}
	});
	
	$("#foo5").carouFredSel({
		circular: false,
		infinite: false,
		auto 	: false,
		prev	: {	
			button	: "#foo5_prev",
			key		: "left"
		},
		next	: { 
			button	: "#foo5_next",
			key		: "right"
		}
	});
    
    $("#foo6").carouFredSel({
		circular: false,
		infinite: false,
		auto 	: false,
		prev	: {	
			button	: "#foo6_prev",
			key		: "left"
		},
		next	: { 
			button	: "#foo6_next",
			key		: "right"
		}
	});
    
    $("#foo7").carouFredSel({
		circular: false,
		infinite: false,
		auto 	: false,
		prev	: {	
			button	: "#foo7_prev",
			key		: "left"
		},
		next	: { 
			button	: "#foo7_next",
			key		: "right"
		}
	});
	
});
