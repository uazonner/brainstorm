$( document ).ready(function() {

});


/* Smooth scrolling para anclas */
$(document).on('click','a.smooth', function(e){
    e.preventDefault();
    var $link = $(this);
    var anchor = $link.attr('href');
    $('html, body').stop().animate({
        scrollTop: $(anchor).offset().top
    }, 1000);
});

(function($) {
    $(document).ready(function() {
        $.slidebars();
    });
}) (jQuery);

(function( $ ) {

    var $container = $('.masonry-container');
    $container.imagesLoaded( function () {
        $container.masonry({
            columnWidth: '.masonry-item',
            itemSelector: '.masonry-item'
        });
    });

})(jQuery);

// WOW Activate
new WOW().init();

jQuery(document).ready(function() { // makes sure the whole site is loaded
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(350).css({'overflow':'visible'});
});


$('.col-megamenu').matchHeight({
    byRow: true,
    property: 'height',
    target: null,
    remove: false
});