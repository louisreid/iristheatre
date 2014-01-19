// jQuery scripts


$(function() {
	var windowWidth = $(window).width();

	// ************ FIXED MENU 
	$('#nav-header ul:first-child').clone().appendTo('#nav-fixed');
	if(windowWidth > 959)
		$('#content').waypoint(function(direction) {
			if(direction == 'down')
				$('#header-fixed').stop().slideDown(300);
			else
				$('#header-fixed').stop().slideUp(300);
		});

	// ************ FADE ANCHORS
	$('#description a, ul li a, h5 a, .a-logo, .a-dates').hover(
		function(){
			$(this).stop().animate({'opacity':'0.6'},300);
		},
		function(){
			$(this).stop().animate({'opacity':'1'},300);
		}
	);


	// ************ HERO ANCHOR
	if(windowWidth > 959)
		$('#hero a').hover(
			function(){
					$('.caption h2').stop().animate({fontSize:'1.7em'},10);
			},
			function(){
					$('.caption h2').stop().animate({fontSize:'1.5625em'},10);
			}
		);


	// ************ SHOW ANCHOR;
	if(windowWidth > 959)
		$('.show a').hover(
			function(){
				$(this).parent().stop().animate({'opacity':'0.8'},300);
			},
			function(){
				$(this).parent().stop().animate({'opacity':'1'},300);
			}
		);
});
