(function($){
	$(document).ready(function () {
	});
	Drupal.behaviors.calendarcc = {
  attach: function(context) {     
			$('[data-pclass]').each(function(){
				classs = $(this).data();
				$(this).parents('.monthview').addClass(classs.pclass);
				$(this).parents('.weekview').addClass(classs.pclass);
				$(this).parents('.dayview').addClass(classs.pclass);
			});
  	}
  }
})(jQuery);