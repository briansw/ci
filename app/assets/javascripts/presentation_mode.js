$(document).keydown(function(e) {
  var $presentation_overlay = $('#overlay.presentation-wrapper');

  if (e.which == 80) {
    var content_blocks = [];
    $('.content-block').each(function() {
      content_blocks.push($(this).clone());
    });

    $presentation_overlay.children('.slides').first().html(content_blocks);

    if ($presentation_overlay.children().length > 0) {
      $presentation_overlay.addClass('visible');
      $('#overlay.presentation-wrapper .slides').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,
        infinite: true,
        speed: 800,
        pauseOnHover: false,
        swipe: true
      });
    }
  } else if (e.which == 27) {
    $('#overlay').html('').removeClass('visible');
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