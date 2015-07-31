$('.bug').click(function() {
  var target = $(this).data('target');

  if (target == 'all') {
    $('.lab-section').fadeTo('fast','1').find('a').removeClass('disabled');
    $('.studio-section').fadeTo('fast','1').find('a').removeClass('disabled');
  } else if (target == 'studio') {
    $('.lab-section').fadeTo('fast','0').find('a').addClass('disabled');
    $('.studio-section').fadeTo('fast','1').find('a').removeClass('disabled');
  } else {
    $('.lab-section').fadeTo('fast','1').find('a').removeClass('disabled');
    $('.studio-section').fadeTo('fast','0').find('a').addClass('disabled');
  }

  $('#filters .bug').not(this).addClass('off');
  $(this).removeClass('off');
});

$("body").on( 'click', '.disabled', function(e) {
  e.preventDefault();
});