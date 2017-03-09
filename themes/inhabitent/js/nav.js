
(function($) {
    // Change nav bar style for Home and About pages
    $("#site-navigation").addClass('alternate-navigation');
       
    // Change nav bar style on scroll  
    $(window).scroll(function() {
        if($(window).scrollTop() < $(window).height()){
            $("#site-navigation").addClass('alternate-navigation');   
        }
        else{
            $("#site-navigation").removeClass('alternate-navigation');
        }
    });

    // Toggle search field
   $('#toggle-search').on('click', function(event) {       
       $('.search-field').animate( { width: 'toggle' }, 250 );
   });
})(jQuery);
