(function($) {
  $( document ).ready(function() {
	  
		function scrolled () {
			$('#homebanner').addClass('hidethis');
		}
		
	  $('.js-start').on('click', function() {
			scrolled();
    });

		$(window).on('DOMMouseScroll mousewheel touchmove', function(event) {
	  	scrolled();
		});
		
  });
}(jQuery));