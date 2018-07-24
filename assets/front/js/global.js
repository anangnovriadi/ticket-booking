function getScrollPosition(){
	var s = $(window).scrollTop();
    if (s < $('#navbar').height()) {
        $('#backtotop').addClass('btt-hide');
    }else{
        $('#backtotop').removeClass('btt-hide');
    };
}

$(document).ready(function(){

	getScrollPosition();

	$(window).scroll(function(){
		getScrollPosition();
	});

	$('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top - 50
	        }, 500);
	        return false;
	      }
	    }
	  });

	var muncul = 0;
	$('#btn-toggle').click(function(){
		if (!muncul) {
			$('#navbar').addClass('display');
			muncul = 1;
		}else{
			$('#navbar').removeClass('display');
			muncul = 0;
		}
	});

});