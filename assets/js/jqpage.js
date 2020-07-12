var height = $('#header').height();
$(window).scroll (function(){

	if($(this).scrollTop()>height){
		$('header').addClass('fixed');
	}else{
		$('header').removeClass('fixed');
	}
});
