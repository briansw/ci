$('.bug').click(function() {
  var target = $(this).data('target') + '-section';
  $('.' + target).fadeOut();
});

//$('.bug').click(function() {
//  var filtered = $('.filter.active');
//
//  if (filtered.length > 0 && !$(this).hasClass('active')) {
//    filtered.removeClass('active');
//    if ($(this).attr('id') == 'internal') {
//      $('.post.internal').slideDown('fast');
//      $('.post.external').slideUp('fast');
//    } else {
//      $('.post.internal').slideUp('fast');
//      $('.post.external').slideDown('fast');
//    }
//  } else {
//    if ($(this).attr('id') == 'internal') {
//      $('.post.external').slideToggle('fast');
//    } else {
//      $('.post.internal').slideToggle('fast');
//    }
//  }
//  $(this).toggleClass('active');
//});