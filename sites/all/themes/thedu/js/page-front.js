// // Tracking Top Links Hover Menus
// function trackHoverIntent(selector, time) {
//   var timeoutId;
//   var elements = window.document.querySelectorAll(selector);
//   for (var i = 0; i < elements.length; i++) {
//     elements[i].addEventListener('mouseenter', function(event) {
//       var targetElement = event.target || event.srcElement;
//       var classes = targetElement.className;
//       var id = targetElement.id;
//       if (!timeoutId) {
//         timeoutId = window.setTimeout(function() {
//           dataLayer.push({
//             'event': 'gtm.hover',
//             'gtm.element': targetElement,
//             'gtm.elementClasses': classes,
//             'gtm.elementId': id,
//             'gtm.elementHoverTime': time
//           });
//           // alert('hhh');
//           timeoutId = null;
//         }, time);
//       }
//     });
//   }

//   for (var i = 0; i < elements.length; i++) {
//     elements[i].addEventListener('mouseleave', function() {
//       if (timeoutId) {
//         window.clearTimeout(timeoutId);
//         timeoutId = null;
//       }
//     });
//   }
// }

(function($){
	$(document).ready(function () {
			// trackHoverIntent('img', 1500);
			$(".infoslide").backstretch([
		    Drupal.settings.pathToTheme.pathToTheme + "/img/tmp/1.jpg",
		    Drupal.settings.pathToTheme.pathToTheme + "/img/tmp/4.jpg",
		    Drupal.settings.pathToTheme.pathToTheme + "/img/tmp/2.jpg",
		    Drupal.settings.pathToTheme.pathToTheme + "/img/tmp/3.jpg"
		  ],
			{duration: 4000,fade:'normal',centeredX:0});
      if($('#cbp-so-scroller').length != 0)
			 new cbpScroller( document.getElementById( 'cbp-so-scroller' ) );

			var delay=1500, setTimeoutConst;
			$('.trackedHover').hover(function(){
	         setTimeoutConst = setTimeout(function(){
	            //do something
	            dataLayer.push({'event':'hover','eventLabel':'dataToPush'});

	         }, delay);

	      },function(){clearTimeout(setTimeoutConst );});

	});
	Drupal.behaviors.front = {
	  attach: function(context) {
	  }
	}
})(jQuery);
