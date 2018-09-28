
// Use this file to require and init additional javascript, e.g require('jquery')
import {WOW} from 'wowjs';
import Barba from 'barba.js';
import $ from 'jquery';
import jQuery from 'jquery';
window.$ = $;
window.jQuery = jQuery;
window.Barba = Barba;

  //Set up Element animations on Scroll
    window.wow = new WOW(
    {
    boxClass:     'animate',      // default
    animateClass: 'animated', // default
    offset:       100,          // default
    mobile:       true,       // default
    live:         true        // default
}
)
  //Set up transition
$('document').ready(function(){
    var transEffect = 
    Barba.BaseTransition.extend({
        start: function(){
          this.newContainerLoading.then(val => this.fadeInNewcontent($(this.newContainer)));
        },
        fadeInNewcontent: function(nc) {
          nc.hide();
          var _this = this;
          $(this.oldContainer).fadeOut(1000).promise().done(() => {
            $(window).scrollTop(0); // scroll to top here
            nc.css('visibility','visible');
            nc.fadeIn(1000, function(){
              _this.done();
            })
          });
        }
    });

    Barba.Pjax.getTransition = function() {
      return transEffect;
    }
    Barba.Pjax.start();
    Barba.Prefetch.init();
  });


/////////////////////////////////////////
////////////////////////////////////////
///////////////////////////////////////


$('document').ready(function(){
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

