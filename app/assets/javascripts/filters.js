$('.bug').click(function() {
  var target   = $(this).data('target');
  if ($(this).hasClass('off')) {
    $('.studio-section, .lab-section').fadeTo('fast','1').find('a').removeClass('disabled');
    $(this).removeClass('off');
  } else {
    if (target == 'studio') {
      $('.lab-section').fadeTo('fast','0').find('a').addClass('disabled');
      $('.studio-section').fadeTo('fast','1').find('a').removeClass('disabled');
    } else {
      $('.studio-section').fadeTo('fast','0').find('a').addClass('disabled');
      $('.lab-section').fadeTo('fast','1').find('a').removeClass('disabled');
    }
    $('#filters .bug').not(this).addClass('off');
    $(this).removeClass('off');
  }
});

$("body").on( 'click', '.disabled', function(e) {
  e.preventDefault();
});