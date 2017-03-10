(function($) {
    // Toggle search field
   $('#toggle-search').on('click', function() {       
       $('.search-field').animate( { width: 'toggle' }, 250 );
   });
})(jQuery);