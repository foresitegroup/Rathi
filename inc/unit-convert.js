$(document).ready(function() {
  $('.convertimp').addClass('inactive');
  Convert('imp');

  $('.convertimp').click(function(e){
    e.preventDefault();
    Convert('imp');
    $('.convertimp').addClass('inactive');
    $('.convertmet').removeClass('inactive');
  });

  $('.convertmet').click(function(e){
    e.preventDefault();
    Convert('met');
    $('.convertmet').addClass('inactive');
    $('.convertimp').removeClass('inactive');
  });

  function Convert(unit) {
    $('TD[data-met],TD[data-imp],SPAN[data-met],SPAN[data-imp]').each(function() {
      var newVal;
      newVal = (unit == 'imp') ? $(this).attr('data-imp') : $(this).attr('data-met');
      $(this).text(newVal);
    });
  }
});