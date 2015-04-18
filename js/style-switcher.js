
// Color Switcher Script

// include jquery.slidePanel.min.js and call colorSwitcherInit() in document ready for color switching.

function colorSwitcherInit(){

	$("#colorchanger a").click(function() {

		if($(this).hasClass("colorblue")){
			$("link.main-style").attr("href","css/style.css");
			$("link.bs-overrides").attr("href","css/bootstrap-overrides.css");
		}

		if($(this).hasClass("colorred")){
			$("link.main-style").attr("href","css/style-red.css");
			$("link.bs-overrides").attr("href","css/bootstrap-overrides-red.css");
		}

		if($(this).hasClass("colorpurple")){
			$("link.main-style").attr("href","css/style-purple.css");
			$("link.bs-overrides").attr("href","css/bootstrap-overrides-purple.css");
		}

		if($(this).hasClass("colorgreen")){
			$("link.main-style").attr("href","css/style-green.css");
			$("link.bs-overrides").attr("href","css/bootstrap-overrides-green.css");
		}

		if($(this).hasClass("colororange")){
			$("link.main-style").attr("href","css/style-orange.css");
			$("link.bs-overrides").attr("href","css/bootstrap-overrides-orange.css");
		}

		
		return false;
	});

	$('#panel2').slidePanel({
		triggerName: '#trigger2',
		triggerTopPos: '200px',
		panelTopPos: '200px'
	});

}


function colorSwitcherInitWithDials(){

	$("#colorchanger a").click(function() {

		if($(this).hasClass("colorblue")){
			$("link.main-style").attr("href","css/style.css");
			$("link.bs-overrides").attr("href","css/bootstrap-overrides.css");

			// change knob colors
			$('.dial1').trigger('configure',{"fgColor":"#16517f"});
			$('.dial2').trigger('configure',{"fgColor":"#1a65a5"});
			$('.dial3').trigger('configure',{"fgColor":"#2086c7"});
			$('.dial4').trigger('configure',{"fgColor":"#2097d4"});
		}

		if($(this).hasClass("colorred")){
			$("link.main-style").attr("href","css/style-red.css");
			$("link.bs-overrides").attr("href","css/bootstrap-overrides-red.css");

			// change knob colors
			$('.dial1').trigger('configure',{"fgColor":"#95002B"});
			$('.dial2').trigger('configure',{"fgColor":"#E60042"});
			$('.dial3').trigger('configure',{"fgColor":"#F23D70"});
			$('.dial4').trigger('configure',{"fgColor":"#F26D93"});

		}

		if($(this).hasClass("colorpurple")){
			$("link.main-style").attr("href","css/style-purple.css");
			$("link.bs-overrides").attr("href","css/bootstrap-overrides-purple.css");

			// change knob colors
			$('.dial1').trigger('configure',{"fgColor":"#730065"});
			$('.dial2').trigger('configure',{"fgColor":"#B1009B"});
			$('.dial3').trigger('configure',{"fgColor":"#D836C4"});
			$('.dial4').trigger('configure',{"fgColor":"#D861C9"});
		}

		if($(this).hasClass("colorgreen")){
			$("link.main-style").attr("href","css/style-green.css");
			$("link.bs-overrides").attr("href","css/bootstrap-overrides-green.css");

			// change knob colors
			$('.dial1').trigger('configure',{"fgColor":"#007046"});
			$('.dial2').trigger('configure',{"fgColor":"#00AC6B"});
			$('.dial3').trigger('configure',{"fgColor":"#35D699"});
			$('.dial4').trigger('configure',{"fgColor":"#60D6A9"});
		}

		if($(this).hasClass("colororange")){
			$("link.main-style").attr("href","css/style-orange.css");
			$("link.bs-overrides").attr("href","css/bootstrap-overrides-orange.css");

			// change knob colors
			$('.dial1').trigger('configure',{"fgColor":"#DE7F00"});
			$('.dial2').trigger('configure',{"fgColor":"#FF9200"});
			$('.dial3').trigger('configure',{"fgColor":"#FFA730"});
			$('.dial4').trigger('configure',{"fgColor":"#FFB757"});
		}

		
		return false;
	});

	$('#panel2').slidePanel({
		triggerName: '#trigger2',
		triggerTopPos: '200px',
		panelTopPos: '200px'
	});

}
