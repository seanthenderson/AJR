$(document).ready(function() {	
	//======= COLOR ACTIVE HOME PAGE MENU OPTIONS =======
	$("#nav-items li").click(function() {
		$("#nav-items li").css({'color': '#FFFFFF'});
		$(this).css({'color': '#FFFFFF'});
	});
	
	//======= NAV BAR DROPDOWNS =======
	var tc = 0;
	
	$(".nav-dropdown").mouseenter(function() {
		$(this).show();
	});
	$(".nav-dropdown").mouseleave(function() {
		$(this).hide();
	});
	
	$("#nav-item li:nth-child(1)").mouseenter(function() {
		$("#nav-news-dropdown").fadeIn('fast');	
	});
	$("#nav-item li:nth-child(1)").mouseleave(function() {
		$("#nav-news-dropdown").hide();	
	});
	
	$("#nav-item li:nth-child(2)").mouseenter(function() {
		$("#nav-voices-dropdown").fadeIn('fast');	
	});
	$("#nav-item li:nth-child(2)").mouseleave(function() {
		$("#nav-voices-dropdown").hide();	
	});
	
	$("#nav-item li:nth-child(3)").mouseenter(function() {
		$("#nav-storytelling-dropdown").fadeIn('fast');	
	});
	$("#nav-item li:nth-child(3)").mouseleave(function() {
		$("#nav-storytelling-dropdown").hide();	
	});
	
	$("#nav-item li:nth-child(4)").mouseenter(function() {
		$("#nav-about-dropdown").fadeIn('fast');	
	});
	$("#nav-item li:nth-child(4)").mouseleave(function() {
		$("#nav-about-dropdown").hide();	
	});
	
	//======= NAV BAR SEARCH FIELD =======
	var tc = 0;
	$i = 0;	
	$(".search-field").click(function() {
		if ($i % 2 === 0) { 
			$(this).animate({'width': '230px'});
			$(".header-search").fadeIn(1000);
			$(".header-search").css({'margin-right': '-135px'});
		} else {
			$(this).animate({'width': '30px'});
			$(".header-search").fadeOut(100);
			$(".header-search").animate({'margin-right': '0px'});
		}
		$i++;
	});
	
	//======= HOME PAGE VOICES TABS =======
	var tc = 0;	
	$("#blogs").click(function() {
		$("#blogs").css({'opacity': 1.0, 'border-bottom': 'solid 2px #10C4F7'});
		$("#contribute").css({'opacity': 0.60, 'border-bottom': '0px'});
		$(".voices-post").show();
		$("#contributions").hide();
	});
	$("#contribute").click(function() {
		$("#contribute").css({'opacity': 1.0, 'border-bottom': 'solid 2px #10C4F7'});
		$("#blogs").css({'opacity': 0.60, 'border-bottom': '0px'});
		$("#contributions").show();
		$(".voices-post").hide();	
	});

	//======= MOBILE MENU =======
	$("#mobile-menu-icon").click(function(e) {
		e.stopPropagation();
		$("#mobile-nav-menu").slideToggle(400);
	});	

	//======= MOBILE CATEGORY BUTTONS =======
	$(".mobile-category:first-child").click(function() {
		$(this).css({'opacity': 1});
		$(".mobile-category:nth-child(2)").css({'opacity': 0.7});
		$("#mobile-featured").show();
		$("#featured").show();
		$("#mobile-voices").hide();
	});	
	$(".mobile-category:nth-child(2)").click(function() {
		$(this).css({'opacity': 1});
		$(".mobile-category:first-child").css({'opacity': 0.7});
		$("#mobile-voices").show();
		$("#mobile-featured").hide();
		$("#featured").hide();
	});
	
	//======= MOBILE CATEGORY BUTTONS =======
	$(".mobile-nav-item").click(function() {
		$(".mobile-nav-item").css({'color': '#B0B0B0'});
		$(this).css({'color': '#FFFFFF'});		
	});	
	$(".mobile-nav-item:first-child").click(function() {
		$("#mobile-featured").show();
		$("#featured").show();
		$("#mobile-latest").hide();
		$("#mobile-voices").hide();
	});
	$(".mobile-nav-item:nth-child(2)").click(function() {
		$("#mobile-latest").show();
		$("#mobile-featured").hide();
		$("#featured").hide();
		$("#mobile-voices").hide();
	});
	$(".mobile-nav-item:nth-child(3)").click(function() {
		$("#mobile-voices").show();
		$("#mobile-featured").hide();
		$("#featured").hide();
		$("#mobile-latest").hide();
	});	
	
	
	//======= ABOUT PAGE SIDE NAVIGATION =======
	$(".about-section-title").click(function() {
		$(".about-section-title").css({'color': '#333'});
		$(this).css({'color': '#1291B5'});
	});
	$(".about-section-title").mouseenter({'color': '#1291B5'}).mouseleave({'color': '#333'});
	$(".about-section-title").click(function() {
		$(".about-section").hide();
	});
	$(".about-section-title:nth-child(1)").click(function() {
		$("#about-section-arrow").animate({'top': '231px'});
		$(".about-section:nth-child(1)").show();
	});
	$(".about-section-title:nth-child(2)").click(function() {
		$("#about-section-arrow").animate({'top': '305px'});
		$(".about-section:nth-child(2)").show();
	});
	$(".about-section-title:nth-child(3)").click(function() {
		$("#about-section-arrow").animate({'top': '380px'});
		$(".about-section:nth-child(3)").show();
	});
	$(".about-section-title:nth-child(4)").click(function() {
		$("#about-section-arrow").animate({'top': '455px'});
		$(".about-section:nth-child(4)").show();
	});
	$(".about-section-title:nth-child(5)").click(function() {
		$("#about-section-arrow").animate({'top': '532px'});
		$(".about-section:nth-child(5)").show();
	});
	$(".about-section-title:nth-child(6)").click(function() {
		$("#about-section-arrow").animate({'top': '610px'});
		$(".about-section:nth-child(6)").show();
	});
	$(".about-section-title:nth-child(7)").click(function() {
		$("#about-section-arrow").animate({'top': '685px'});
		$(".about-section:nth-child(7)").show();
	});
	$(".about-section-title:nth-child(8)").click(function() {
		$("#about-section-arrow").animate({'top': '760px'});
		$(".about-section:nth-child(8)").show();
	});
	
	$(".about-section-title").click(function() {
		if ($(window).width() < 725) {
			$('html, body').animate({scrollTop: $("#about-section-wrapper").offset().top}, 800);	
		}		
	});
	
	var referrer =  document.referrer;
    if(!referrer) return; // no referrer

    if(referrer.toLowerCase().indexOf("ajr.org/contact.asp") !== -1){  
		$("#about-section-arrow").animate({'top': '305px'});
		$(".about-section:nth-child(2)").show();
		$(".about-section:nth-child(1)").hide();
    }
	
	//======= SINGLE NEXT/PREV ARROWS =======
	$(function() {
  		$(".single-content a").attr("target","_blank");
	});	
	
	//======= SINGLE NEXT/PREV ARROWS =======
	$("#single-left-arrow").mouseenter(function() {
		$("#single-prev").show();
	});
	$("#single-left-arrow").mouseleave(function() {
		$("#single-prev").hide();
	});
	$("#single-prev").mouseenter(function() {
		$(this).show();
	});
	$("#single-prev").mouseleave(function() {
		$(this).hide();
	});
	$("#single-right-arrow").mouseenter(function() {
		$("#single-next").show();
	});
	$("#single-right-arrow").mouseleave(function() {
		$("#single-next").hide();
	});
	$("#single-next").mouseenter(function() {
		$(this).show();
	});
	$("#single-next").mouseleave(function() {
		$(this).hide();
	});
	
	//======= SINGLE NEXT SLIDE IN =======
	$(window).scroll(function(){
		var h = $('.single-content').height();
		var y = $(window).scrollTop();
		if (y > (h*1.05)) {
			for (var i = 0; i < 1; i++) {
				$(".single-next-slide").show().animate({'right': '10px'});
			}
		} else {
			$(".single-next-slide").hide();
		}
		$("#close-next-slide").click(function() {
			$(".single-next-slide").remove();
		});
	});
	
	//======= SINGLE NEXT/PREV BUTTONS CLOSE BUTTON (MOBILE ONLY)  =======
	$(".single-prev-close").click(function() {
		$("#single-prev").hide();
	});
	$(".single-next-close").click(function() {
		$("#single-next").hide();
	});
		
	//======= IFRAME INSERTION DEFAULT HEIGHT AS PERCENTAGE OF WIDTH =======
	var div = $('#single-page-wrapper iframe');

 	if ($(window).width() > 1360) {
 		var width = div.width()/1.15;
 		div.css('height', width);
 	} else {
 		var width = div.width()/1.35;
 		div.css('height', width);	
 	}
 	
 	//$(window).ready(updateHeight);
	//$(window).resize(updateHeight);

	//function updateHeight() {
    //	var div = $('#single-content iframe');
    //	var width = div.width();
    //	div.css('height', width);
	//}

	//======= MOBILE NEWS MENU DROPDOWN =======
	$("#news-menu-icon").click(function() {
		$("#mobile-news-menu").slideToggle();
	});	
	
});


	