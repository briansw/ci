$(document).keyup(function(e) {
  if (e.which == 80) {
    var $overlay = $('#overlay .slides'),
        slides = [];

    if ($overlay.children().length == 0) {
      $('.content-block').each(function() {
        slides.push($(this).clone());
      });

      $overlay.append(slides);

      $overlay.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 3500,
        dots: false,
        fade: false,
        infinite: true,
        speed: 600,
        lazyLoad: 'progressive',
        pauseOnHover: false,
        swipe: true
      });

      $('#overlay').addClass('visible');
    }

    $('.slick-list').focus();

  } else if (e.which == 27) {
    $('#overlay').html('<div class="slides"></div>').removeClass('visible');
  }

});

//$('.slideshow-link').click(function(event) {
//  event.preventDefault();
//  var slide_to_show = $(this).data('slide-index');
//  $('.slick-initialized').slickGoTo(slide_to_show);
//  $('.slideshow-block').toggleClass('visible');
//  $('.close-button').show();
//});
//
//$('.close-button').click(function(event) {
//  event.preventDefault();
//  $('.slideshow-block').removeClass('visible');
//  $(this).hide();
//});