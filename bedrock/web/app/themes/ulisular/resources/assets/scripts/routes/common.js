export default {
  init() {
    // JavaScript to be fired on all pages
        /////
        $('.quehacemos').click(function (e) { 
          e.preventDefault();
          $('.quehacemos,.porquehacemos,.quequeremos').removeClass('active');
          $(this).addClass('active');
          $('.quehacemos,.porquehacemos,.quequeremos').fadeOut();
          $('.quehacemos').fadeIn();
      });
      $('.porquehacemos').click(function (e) { 
          e.preventDefault();
          $('.quehacemos,.quequeremos').removeClass('active');
          $(this).addClass('active');
          $('.quehacemos,.porquehacemos,.quequeremos').fadeOut();
          $('.porquehacemos').fadeIn();
      });
      $('.quequeremos').click(function (e) { 
          e.preventDefault();
          $('.quehacemos,.porquehacemos').removeClass('active');
          $(this).addClass('active');
          $('.quehacemos,.porquehacemos,.quequeremos').fadeOut();
          $('.quequeremos').fadeIn();
      });

      //$('selector').document.getElmentById('div')
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
