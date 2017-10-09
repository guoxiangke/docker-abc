(function($){
	$(document).ready(function () {
		$('.form-required').remove();
		$('.form-group').each(function(){ $(this).children('input').attr('placeholder',$(this).children('label').text());$(this).children('label').hide(); });

		$('#edit-telephone').blur(function(){
			novalid = validatemobile($(this).val(),$(this));
		});
		$('#edit-submit').attr('disabled','disabled');
		$('#edit-code').blur(function(){
			if($(this).val()>6665 && $(this).val()<8889){
				alert($(this).val());
				$('#edit-submit').removeAttr('disabled');
			}
		});
	});

Drupal.behaviors.login = {
  attach: function(context) {    
      
  	}
  }
})(jQuery);
