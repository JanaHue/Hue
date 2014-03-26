var App = {};
	App.cache = {};

	App.init = function() {
		$('html').removeClass('no-js');
		$('textarea#comment').attr('placeholder','Comment away...');
		// $('input#author').attr('placeholder','Your name');
		// $('input#email').attr('placeholder','Email');
	
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
	
		// listen for a click on the 
		$('.burger').on('click',function(e) {
			e.preventDefault();
			$('ul.menu').slideToggle(100);
		})

		// flexslider
		var slider = $('.flexslider');
		// check if there is even a flexslider on the page first
		if(slider.length) {
			// the fleixify it
			slider.flexslider();
		}

	}//end app.init

$(function(){
	App.init(); 
});