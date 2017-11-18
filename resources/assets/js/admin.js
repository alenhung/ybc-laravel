require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';
Vue.use(Buefy);


// var app = new Vue({
//   el: '#app',
//   data: {}
// });



$(document).ready(function(){
  $( ".has-dropdown" ).hover(
    function() {
      $( this ).addClass( "is-active" );
    }, function() {
      $( this ).removeClass( "is-active" );
    }
  );
});
