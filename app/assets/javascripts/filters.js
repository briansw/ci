$('.bug').click(function() {
  var target   = $(this).data('target'),
      filtered = $('.filter.active');

  if (filtered.length > 0 && !$(this).hasClass('active')) {
    filtered.removeClass('active');
    if (target == 'studio') {
      $('.studio-section').slideDown('fast');
      $('.lab-section').slideUp('fast');
    } else {
      $('.studio-section').slideUp('fast');
      $('.lab-section').slideDown('fast');
    }
  } else {
    if (target == 'studio') {
      $('.lab-section').slideToggle('fast');
    } else {
      $('.studio-section').slideToggle('fast');
    }
  }
  $(this).toggleClass('active');
});