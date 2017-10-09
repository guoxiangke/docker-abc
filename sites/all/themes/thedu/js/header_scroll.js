(function($){
	$(document).ready(function () {
		$(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 100) {
            $("header#navbar").addClass('smaller');
            $("header#navbar").removeClass("navbar-bigger");
        } else {
            $("header#navbar").removeClass("smaller");
            $("header#navbar").addClass('navbar-bigger');
        }
    });

	});
})(jQuery);
