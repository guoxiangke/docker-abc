(function($){
  $(document).ready(function () {
    $('#float-consult .fa-wechat').hover(function(){$('#float-consult .qr').toggleClass('hide');},function(){$('#float-consult .qr').toggleClass('hide');});  
    $(".herobackstretch").each(function() {
        var $this = $(this), img = $(this).data('img');
        $this.backstretch(img,
        {duration: 4000,fade:'normal',centeredX:100});

      });
  });
  
Drupal.behaviors.thedu = {
  attach: function(context) {
  	}
  }
})(jQuery);

// dream@zenfund.com
function validatemobile(mobile,elem)
{
    if(mobile.length==0)
    {
       alert('请输入手机号码！');
       elem.focus();
       return false;
    }    
    if(mobile.length!=11)
    {
        alert('手机号码位数不对！');
        elem.focus();
        return false;
    }
    
    var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1})|(14[0-9]{1})|(17[0-9]{1})|153)+\d{8})$/;
    if(!myreg.test(mobile))
    {
        // alert('手机号码输入有误！');
        elem.focus();
        return false;
    }
}    
//end