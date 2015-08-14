$('.lightboxable').click(function(event) {
  event.preventDefault();

  var slide_index = $(this).data('slide-index'),
      slides      = [];

  $('.lightboxable').each(function() {
    if ($(this).parents('.slick-cloned').length == 0) {
      var cb_id = $(this).data('id'),
          slide = image_or_video(this, cb_id);

      slides.push(slide);
    }
  });

  function image_or_video(cb, cb_id) {
    var image_path,
        video_path;

    if ($(cb).hasClass('video-area')) {
      video_path = $(cb).data('video');
      return '<div id="' + cb_id + '" class="lightbox-slide">' +
             '<div class="image">' +
             '<iframe type="text/html" width="708" height="500" src="http://www.youtube.com/embed/' + video_path + '" frameborder="0" allowfullscreen></iframe>' +
             '</div>' +
             '</div>';
    } else {
      image_path = $(cb).data('hires');
      return '<div id="' + cb_id + '" class="lightbox-slide">' +
             '<div class="image">' +
             '<img src="' + image_path + '" />' +
             '</div>' +
             '</div>';
    }
  }

  $('#lightbox-slides').append(slides);

  $('#lightbox-slides').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 3500,
    dots: false,
    fade: false,
    infinite: true,
    speed: 0,
    lazyLoad: 'progressive',
    pauseOnHover: false,
    swipe: true,
    arrows: false
  });

  scale_videos();

  $('#lightbox-slides').slick('slickGoTo', slide_index);
  $('#lightbox-slides').slick('slickSetOption', 'speed', App.slide_speed, false);
  $('#lightbox .spinner').hide();
  $('#lightbox').fadeIn();
  $('#lightbox .slick-list').focus();

});

$('#close-lightbox').click(function(event) {
  event.preventDefault();
  close_lightbox();
});

$(document).keyup(function(e) {
  if (e.keyCode == 27) {
  close_lightbox();
  }
});

function close_lightbox() {
  $('#lightbox').fadeOut(function() {
    $('#lightbox-slides').slick('unslick');
    $('#lightbox-slides').html('');
    $('#lightbox .spinner').show();
  });
}