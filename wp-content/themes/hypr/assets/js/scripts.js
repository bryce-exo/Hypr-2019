jQuery(function($){
   
	$('body').addClass('pageload');
	

	init = function(){
		if($('#switch-content').length){
			
			demo();
		}

		if($('.page-template-resources').length){
			expandlisting();	
		}

		if($('.page-template-blog').length){
			expandlisting();	
		}

		if($('.page-template-press').length){
			expandlisting();	
		}


		$('#menu-item-154').find('a.quadmenu-dropdown-toggle.hoverintent').attr('href','');
	}

	

	expandlisting = function(){
		$('.expand-btn').click(function(){
			

			if($(this).hasClass('active')){
				$(this).parent().parent().removeClass('expand');
				$(this).removeClass('active');
				$(this).text('Show All +');
			}else{
				$(this).parent().parent().addClass('expand');
				$(this).addClass('active');
				$(this).text('Show Less -');
			}

		});
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

		var loc = window.location.hash;
		

		if(loc=='#exp'){
			$('.btn-demo').parent().removeClass('active');
			demoexperience();
		}

		if(loc=='#schedule'){
			$('.btn-demo').parent().removeClass('active');
			demoone();
		}
		
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
		window.location.hash = 'schedule';
		
	}


	demoexperience = function(){
		$('#experience-btn').parent().addClass('active');

		$('#experience').addClass('enter');
		window.location.hash = 'exp';


		var slide = $('#experience');
		console.log('experience');
		demoslides(slide);

	}

	demotour = function(){
		$('#experience-btn').parent().addClass('active');
		window.location.hash = 'tour';

	}

	
	init();


});