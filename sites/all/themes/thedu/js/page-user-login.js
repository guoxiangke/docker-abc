(function($){
	$(document).ready(function () {
		$("#page-user-login").backstretch(
			Drupal.settings.pathToTheme.pathToTheme + "/img/loginbg.jpg",
			{duration: 4000,fade:'normal',centeredX:0});
	});
	
Drupal.behaviors.login = {
  attach: function(context) {    
      
  	}
  }
})(jQuery);
