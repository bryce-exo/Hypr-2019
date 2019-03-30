jQuery(function($){
   
	$('body').addClass('pageload');



	const el = document.querySelector(".masthead-section");

	el.addEventListener("mousemove", (e) => {
		
	  el.style.backgroundPositionX = -e.offsetX + "px";
	  el.style.backgroundPositionY = -e.offsetY + "px";
	});

});