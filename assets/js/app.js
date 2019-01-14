(function($) {

  $('.menu__button > a').click(function(e) {
    e.preventDefault();

    var src = $(this).find('img').attr('src');

    if (src.indexOf('hamburger') > 0) {
      $(this).find('img').attr('src', src.replace('hamburger', 'close'));
    } else {
      $(this).find('img').attr('src', src.replace('close', 'hamburger'));
    }

    $('#main_menu').toggle();
  });

  $('.scroll-top__button').click(function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop: 0}, '300');
  });

  var paged = $('.archive-headline').data('paged');
  var num_pages = $('.archive-headline').data('num-pages');

  if (paged == 1) {
    $('.wp-pagenavi').prepend('<a class="previouspostslink previouspostslink__disabled" href="javascript:void(0);"> </a>');
  }

  if (paged == num_pages) {
    $('.wp-pagenavi').append('<a class="nextpostslink nextpostslink__disabled" href="javascript:void(0);"> </a>');
  }

})(jQuery);
