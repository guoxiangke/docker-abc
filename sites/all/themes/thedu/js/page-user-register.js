(function($){
	$(document).ready(function () {
		$('.form-required').remove();
		$('.form-group').each(function(){ $(this).children('input').attr('placeholder',$(this).children('label').text()) });
		$('#edit-field-qq-und-0-value').keyup(function(){
			$('#edit-mail').val($(this).val()+'@qq.com');
			$('[name^=pass]').val($(this).val());
		});
		$('#edit-field-telphone-und-0-value').blur(function(){
			validatemobile($(this).val(),$(this));
		});
	});

Drupal.behaviors.login = {
  attach: function(context) {    
      
  	}
  }
})(jQuery);
