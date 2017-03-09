(function($) {
    // Toggle search field
   $('#toggle-search').on('click', function(event) {       
       $('.search-field').animate( { width: 'toggle' }, 250 );
   });
})(jQuery);