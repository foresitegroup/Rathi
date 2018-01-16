$(document).ready(function() {
  $('.convertimp').addClass('inactive');
    convertTo('imp');

    $('.convertimp').click(function(event){
      event.preventDefault();
      convertTo('imp');
      $('.convertimp').addClass('inactive');
      $('.convertmet').removeClass('inactive');
    });

    $('.convertmet').click(function(event){
      event.preventDefault();
      convertTo('met');
      $('.convertmet').addClass('inactive');
      $('.convertimp').removeClass('inactive');
    });

    function convertTo(system) {
      $('.convert,.convertrpm,.convertt,.convertw').each(function() {
        if ($(this).text() != '') {
          var newVal, multiplier, decimel;

          switch ($(this).attr("class")) {
            case 'convertrpm':
              multiplier = (system == 'imp') ? 1.341022 : 0.745699872;
              decimel = (typeof rpmdec !== 'undefined') ? rpmdec : 2;
              break;
            case 'convertt':
              multiplier = (system == 'imp') ? 8.8507457673787 : 0.11298482933333;
              decimel = (typeof tdec !== 'undefined') ? tdec : 0;
              break;
            case 'convertw':
              multiplier = (system == 'imp') ? 2.20462 : 0.45359237;
              if (typeof wdec !== 'undefined') {
                decimel = (system == 'imp') ? wdec : 0;
              } else {
                decimel = (system == 'imp') ? 2 : 0;
              }
              break;
            default:
              multiplier = (system == 'imp') ? 0.0393700787401575 : 25.4;
              if (typeof dec !== 'undefined') {
                decimel = (system == 'imp') ? dec : 0;
              } else {
                decimel = (system == 'imp') ? 2 : 0;
              }
          }

          newVal = (parseFloat($(this).text()) * multiplier).toFixed(decimel);
          $(this).text(newVal);
        }
      });

      $('.scale,.scalerpm,.scalet,.scalew').each(function() {
        var newVal;

        switch ($(this).attr("class")) {
          case 'scalerpm': newVal = (system == 'imp') ? 'HP' : 'kW'; break;
          case 'scalet': newVal = (system == 'imp') ? 'in-lbs' : 'N-m'; break;
          case 'scalew': newVal = (system == 'imp') ? 'lbs' : 'kg'; break;
          default: newVal = (system == 'imp') ? 'in' : 'mm';
        }

        $(this).text(newVal);
      });
    }
});