

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
