

// require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy'
Vue.use(Buefy);


// var app = new Vue({
//   el: '#app',
//   data: {}
// });
var app = new Vue({
  el: '#app',
  data:function(){
    return{
      isActive: false,
      isActive2: false
    }
  },
  methods:{
    openMenu:function(){
      this.isActive = !this.isActive;
      this.isActive2 = !this.isActive2;
    }
  }
});

jQuery(function($){
// navbar-toggle
  $(window).scroll(function(){
    if($(this).scrollTop() > 10)
    {
       $('.navbar').css({"background":"rgba(0, 0, 0, 0.9)"});
    } else {
       $('.navbar').css({"background":"rgba(0, 0, 0, 0.4)"});
    }
  });
  $( ".has-dropdown" ).hover(
    function() {
      $( this ).addClass( "is-active" );
    }, function() {
      $( this ).removeClass( "is-active" );
    }
  );
  //
  // browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');
	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) {
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});
  //
  


});
// site Animation AOS
AOS.init({
  duration: 1200,
});
// site Animation AOS
