
(function($) {
    // Change nav bar style for Home and About pages
    $('#site-navigation').addClass('alternate-navigation');
       
    // Change nav bar style on scroll  
    $(window).scroll(function() {
        if($(window).scrollTop() > $('#hero-image').height()){
            $('#site-navigation').removeClass('alternate-navigation');
        }
        else{
            $('#site-navigation').addClass('alternate-navigation');   
        }
    });

    // Toggle search field
   $('#toggle-search').on('click', function() {       
       $('#site-navigation .search-field').animate( { width: 'toggle' }, 250 );
   });
})(jQuery);
