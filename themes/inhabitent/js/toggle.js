(function($) {
    // Toggle search field
   $('#toggle-search').on('click', function() {       
       $('#site-navigation .search-field').animate( { width: 'toggle' }, 250 );
   });
})(jQuery);