(function($) {
    $(document).ready(function() {
        if (!device.tablet() && !device.mobile()) {
            $(".player").mb_YTPlayer();
        } else { 
            $('.videobkg, .small-background-section').addClass(
                'videobkg-default-image');
        }
    });


})(jQuery);