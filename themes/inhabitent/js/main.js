
(function($) {
// Change nav bar style on scroll
   $(window).scroll(function() {
       
       event.preventDefault();
            var scroll = $(window).scrollTop();

            if (scroll >= 1098)
            $(".site-header").removeClass("reverse-header");
            else
            $(".site-header").addClass("reverse-header");
        });

// Toggle search field
   $('#toggle-search').on('click', function(event) {
console.log('hope')
       
       event.preventDefault();
       $('.search-field').animate( { width: 'toggle' }, 250 );
   });
})(jQuery)
