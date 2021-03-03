(function($) {
    var remove_iframe = setInterval(function() {
        $.each($('#disqus_thread iframe'), function(arr,x) {
            var src = $(x).attr('src');
            if (src && src.match(/(ads-iframe)|(disqusads)/gi)) {
                $(x).remove();
            }
        });
    }, 500);

    setTimeout(function() {
        clearInterval(remove_iframe);
    }, 7000);
})(jQuery);