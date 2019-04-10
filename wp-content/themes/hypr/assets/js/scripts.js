jQuery(function($){
   
	$('body').addClass('pageload');
	

	init = function(){
		if($('#switch-content').length){
			
			demo();
		}


		$('#menu-item-154').find('a.quadmenu-dropdown-toggle.hoverintent').attr('href','');
	}

	



	demo = function(){
		$('.btn-demo').click(function(){
			var btn = $(this);
			var current = $(this).parent();

			if($(this).parent().hasClass('active')){
				current.removeClass('active');
			}else{
				$('.btn-demo').parent().removeClass('active');

				if (btn.attr("id") == "tour-btn") {
					demotour();
				}

				if (btn.attr("id") == "experience-btn") {
					demoexperience();
				}

				if (btn.attr("id") == "one-btn") {
					demoone();
				}

			}
					
		});
	}

	demoslides = function(slide){

		
		$('.switch-container.enter').removeClass('exit');
		
		console.log('demoslides');


		//Exit
		var active = $('.switch-container.active');
		$('.switch-container.active').addClass('exit');

		//Enter
		active.removeClass('exit').removeClass('active').removeClass('enter');	
		

		//Reset
		setTimeout(function(){
			slide.addClass('active').addClass('enter');;

			
		},200);
		


	}	


	demoone = function(){
		$('#one-btn').parent().addClass('active');
		$('#one').addClass('enter');


		var slide = $('#one');
		console.log('demoone');
		demoslides(slide);
		
		
	}


	demoexperience = function(){
		$('#experience-btn').parent().addClass('active');

		$('#experience').addClass('enter');


		var slide = $('#experience');
		console.log('experience');
		demoslides(slide);

	}

	demotour = function(){
		$('#experience-btn').parent().addClass('active');
	}

	
	init();


});