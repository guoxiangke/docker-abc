(function($){
Drupal.behaviors.webrtc = {
  attach: function(context) {  
  	$('#open_class_record').click(function(){
  		 order_id = location.search.split('/')[4];
  		 uid = Drupal.settings.currentUser;
  		 $.ajax({
                type: 'POST',
                url: Drupal.settings.basePath+'?q=create/class_record',
                data: 'uid=' + uid + '&order_id=' + order_id,
                dataType:'json',
                context: this,
                success: function (data) {
                    //Swap state values
                    if(data.error==1){
                    	alert('您已经申请过了，我们的老师会尽快与您联系！');	
                      $(this).hide(); 
                    }else if(data.error==2){
                    	alert('您点卡不足，请充值后申请！！');	
                      $(this).hide(); 
                    }else if(data.error==3){
                      alert('该课程不允许再申请了！！');  
                      $(this).hide(); 
                    }else if(data.nid){
                    	alert('创建成功！请耐心等待老师与您联系！');
                    }else{
                    	alert('创建失败了！！');
                      $(this).hide(); 
                    }
                }
            });
  	});
  
    $('.open_class_record').click(function(e){
       e.preventDefault();
       order_id = $(this).attr('title');
       uid = Drupal.settings.currentUser;
       $.ajax({
                type: 'POST',
                url: Drupal.settings.basePath+'?q=create/class_record',
                data: 'uid=' + uid + '&order_id=' + order_id,
                dataType:'json',
                context: this,
                success: function (data,text) {
                    //Swap state values
                    if(data.error==1){
                      alert('您已经申请过了，我们的老师会尽快与您联系！'); 
                      $(this).hide();
                    }else if(data.error==2){
                      alert('您点卡不足，请充值后申请！！'); 
                      $(this).hide(); 
                    }else if(data.error==3){
                      alert('该课程不允许再申请了！！');  
                      $(this).hide();
                    }else if(data.nid){
                      alert('创建成功！请耐心等待老师与您联系！');
                      $(this).hide();
                    }else{
                      alert('创建失败了！！');
                    }
                }
            });
    });

  	}
  }
})(jQuery);
