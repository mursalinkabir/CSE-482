
// Custom Script for Top nav transparency on Scroll

function transNav(navElement){

		$(window).scroll(function(){
			var scrollTop = $(window).scrollTop();
			if(scrollTop != 0)
				$(navElement).stop().animate({'opacity':'0.9'},400);
			else	
				$(navElement).stop().animate({'opacity':'1'},400);
		});

		$(navElement).hover(
			function (e) {
				var scrollTop = $(window).scrollTop();
				if(scrollTop != 0){
					$(navElement).stop().animate({'opacity':'1'},400);
				}
			},
			function (e) {
				var scrollTop = $(window).scrollTop();
				if(scrollTop != 0){
					$(navElement).stop().animate({'opacity':'0.9'},400);
				}
			}
			);
}