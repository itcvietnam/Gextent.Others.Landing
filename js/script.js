$(function() {
	/*
	* Scroll to
	*/
	$('[data-js-scroll-to]').on('click', function(e) {
		/*
		* Prevent default
		*/
		e.preventDefault();

		/*
		* Get target
		*/
		var target	= this.hash;

		/*
		* Scroll to
		*/
		$('html, body').stop().animate({
			'scrollTop': $(target).offset().top
	    }, 600, 'swing', function() {
			window.location.hash = target;
	    });
	});
});