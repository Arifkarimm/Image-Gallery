

/*jQuery anonymous function calls*/
(function($) {

/* ========================================================================== */

/* Documetn Ready */

$(function() {

/* Magnific Popup Lightbox */

if( $('.qt-photo-gallery').length ){

	$('.qt-photo-gallery-item').magnificPopup({
	  delegate: 'a', // child items selector, by clicking on it popup will open
	  type: 'image',
	  gallery: {
	  	enabled:true
	  }
	  // other options
	});

}


/* End: Document Ready */

});


/* ========================================================================== */

})(jQuery);




/* ================================= Back To TOP ========================================= */

$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});

