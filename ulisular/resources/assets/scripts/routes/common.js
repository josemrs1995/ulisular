export default {
  init() {
    // JavaScript to be fired on all pages
    $('body').removeClass('nosotros');

    $('.navbar-burger').click(function (e) { 
        e.preventDefault();
        $('.navbar-burger').toggleClass('is-active');
        $('.menu-responsive').fadeToggle();
      });
        /////
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

      //$('selector').document.getElmentById('div')
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
