(function($){
Drupal.behaviors.openclassroom = {
  attach: function(context) {
     	$('#open_classroom').click(function(e){
     		if($(this).attr('data-room')!=''){
     			e.preventDefault();
     			window.open($(this).attr('data-room'),"ABC-ChinaEdu","directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=800,height=600");
     		}
     	});
  	}
  }
})(jQuery);
