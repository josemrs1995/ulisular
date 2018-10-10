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
                $('.porquehacemos-content,.quequeremos-content').fadeOut(200);
                setTimeout(() => {
                    $('.quehacemos-content').fadeIn();
                }, 200); 
            });
            $('.porquehacemos').click(function (e) { 
                e.preventDefault();
                $('.quehacemos,.porquehacemos,.quequeremos').removeClass('active');
                $(this).addClass('active'); 
                $('.quehacemos-content,.quequeremos-content').fadeOut(200);
                setTimeout(() => {
                    $('.porquehacemos-content').fadeIn();
                }, 200); 
                
            });
            $('.quequeremos').click(function (e) { 
                e.preventDefault();
                $('.quehacemos,.porquehacemos,.quequeremos').removeClass('active');
                 $(this).addClass('active');
                $('.quehacemos-content,.porquehacemos-content').fadeOut(200);
                setTimeout(() => {
                    $('.quequeremos-content').fadeIn();
                }, 200); 
                
            });

            setInterval(() => {
                var contentHeight = $('.nosotros-toggle-container').height();
                $('.img-nosotros').height(contentHeight);
            }, 100); 
           

            // Aqui va el script para el form del footer
$("#submitemail").click(function (e) {
    e.preventDefault();
    var name = $("#name").val();
    var email = $("#email").val();
    var mensaje = $("#mensaje").val();
    $("#returnmessage").empty(); // To empty previous error/success message.
    // Checking for blank fields.
    if (name == '' || email == '' || mensaje == '') {
      alert("Porfavor llene todos los campos antes de enviar el mensaje");
    } else {
      // Returns successful data submission message when the entered information is stored in database.
      $.post("http://ulisular.ivorystack.com/extras/contact_form.php", {
        name1: name,
        email1: email,
        mensaje1: mensaje,
      }, function (data) {
        $("#returnmessage").append(data); // Append returned message to message paragraph.
        if (data == "Gracias. Estaremos en contacto muy pronto.") {
          $("#subscription-form")[0].reset(); // To reset form fields on success.
        }
      });
    }
   });
    });