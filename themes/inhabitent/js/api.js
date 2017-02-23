(function($) {
    $('#close-comments').on('click', function() {
        $.ajax({
            method: 'post',
            url: red_vars.rest_url + 'wp/v2/posts/' + red_vars.post_id,
            data: {
                comment_status: 'closed'
            },
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-WP-Nonce', red_vars.wp_api_nonce);
            }
        }).done(function() {
            alert('Success! Comments were closed.');
        });
    });
})(jQuery);