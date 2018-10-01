// Import IE polyfill for Vue
import "babel-polyfill";

// Require utils js
require('./utils');
// Require Vue
window.axios = require('axios');
window.Vue = require('vue');

require('./globals')

Vue.component('posts-loop', require('./components/posts-loop.vue'));
Vue.component('pages-loop', require('./components/pages-loop.vue'));


Barba.Dispatcher.on('transitionCompleted', function(currentStatus, oldStatus, container) {
        var app = new Vue({
            el: '#app'
        });
        wow.init();
        var sync = setInterval(() => {
            wow.sync();
        }, 2000);
        setTimeout(() => {
            clearInterval(sync);
        }, 15000);
        
        ////
        $('body').removeClass('nosotros');
        $('body').removeClass('servicios');
      
        $('.menu-contactanos').click(function (e) { 
          e.preventDefault();
          $('html, body').animate({scrollTop: ($('.contactanos-correo').offset().top) -70}, 1500);
        });
        
          $('.navbar-burger').click(function (e) { 
              e.preventDefault();
              $('.navbar-burger').toggleClass('is-active');
              $('.menu-responsive').fadeToggle();
          });
              $('.porquehacemos-content,.quequeremos-content').fadeOut();
              
              $('.quehacemos').click(function (e) { 
                e.preventDefault();
                $('.quehacemos,.porquehacemos,.quequeremos').removeClass('active');
                $(this).addClass('active');
                $('.porquehacemos-content,.quequeremos-content').fadeOut();
                $('.quehacemos-content').fadeIn();
            });
            $('.porquehacemos').click(function (e) { 
                e.preventDefault();
                $('.quehacemos,.porquehacemos,.quequeremos').removeClass('active');
                $(this).addClass('active');
                $('.quehacemos-content,.quequeremos-content').fadeOut();
                $('.porquehacemos-content').fadeIn();
            });
            $('.quequeremos').click(function (e) { 
                e.preventDefault();
                $('.quehacemos,.porquehacemos,.quequeremos').removeClass('active');
                $(this).addClass('active');
                $('.quehacemos-content,.porquehacemos-content').fadeOut();
                $('.quequeremos-content').fadeIn();
            });
    });