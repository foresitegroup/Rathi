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
      $('.convert,.convertrpm,.convertt,.convertw,.converti').each(function() {
        if ($(this).text() != '') {
          var multiplier, decimel;

          switch ($(this).attr("class")) {
            case 'convertrpm':
              multiplier = (system == 'imp') ? 1.341022 : 0.745699872;
              var rpmdecfinal = (typeof rpmdec !== 'undefined') ? rpmdec : 2;
              var rpmdecmfinal = (typeof rpmdecm !== 'undefined') ? rpmdecm : 2;
              decimel = (system == 'imp') ? rpmdecfinal : rpmdecmfinal;
              break;
            case 'convertt':
              multiplier = (system == 'imp') ? 8.8507457673787 : 0.11298482933333;
              var tdecfinal = (typeof tdec !== 'undefined') ? tdec : 0;
              var tdecmfinal = (typeof tdecm !== 'undefined') ? tdecm : 0;
              decimel = (system == 'imp') ? tdecfinal : tdecmfinal;
              break;
            case 'convertw':
              multiplier = (system == 'imp') ? 2.20462 : 0.45359237;
              var wdecfinal = (typeof wdec !== 'undefined') ? wdec : 2;
              var wdecmfinal = (typeof wdecm !== 'undefined') ? wdecm : 0;
              decimel = (system == 'imp') ? wdecfinal : wdecmfinal;
              break;
            case 'converti':
              multiplier = (system == 'imp') ? 3417.171903 : 0.000292641;
              var idecfinal = (typeof idec !== 'undefined') ? idec : 1;
              var idecmfinal = (typeof idecm !== 'undefined') ? idecm : 5;
              decimel = (system == 'imp') ? idecfinal : idecmfinal;
              break;
            default:
              multiplier = (system == 'imp') ? 0.0393700787401575 : 25.4;
              var decfinal = (typeof dec !== 'undefined') ? dec : 2;
              var decmfinal = (typeof decm !== 'undefined') ? decm : 0;
              decimel = (system == 'imp') ? decfinal : decmfinal;
          }
          
          if ($(this).attr('data-orig') && system == 'met') {
            $(this).text($(this).attr('data-orig'));
          } else {
            var newVal = (parseFloat($(this).text()) * multiplier).toFixed(decimel);
            $(this).text(newVal);
          }
        }
      });

      $('.converttemp').each(function() {
        if ($(this).text() != '') {
          if (system == 'imp') {
            newVal = (parseFloat(($(this).text()) * 1.8) + 32).toFixed(0);
          } else {
            newVal = (parseFloat(($(this).text()) - 32) / 1.8).toFixed(0);
          }
          $(this).text(newVal);
        }
      });

      $('.scale,.scalerpm,.scalet,.scalew,.scalei,.scaletemp').each(function() {
        var newVal;

        switch ($(this).attr("class")) {
          case 'scalerpm': newVal = (system == 'imp') ? 'HP' : 'kW'; break;
          case 'scalet': newVal = (system == 'imp') ? 'in-lbs' : 'N-m'; break;
          case 'scalew': newVal = (system == 'imp') ? 'lbs' : 'kg'; break;
          case 'scalei': newVal = (system == 'imp') ? 'lb-in2' : 'kgm2'; break;
          case 'scaletemp': newVal = (system == 'imp') ? 'F' : 'C'; break;
          default: newVal = (system == 'imp') ? 'in' : 'mm';
        }

        $(this).text(newVal);
      });

      $('.sepconvert').each(function() {
        if ($(this).text() != '') {
          var multiplier, decimel;

          multiplier = (system == 'imp') ? 0.0393700787401575 : 25.4;
          var sepdecfinal = (typeof sepdec !== 'undefined') ? sepdec : 2;
          var sepdecmfinal = (typeof sepdecm !== 'undefined') ? sepdecm : 0;
          decimel = (system == 'imp') ? sepdecfinal : sepdecmfinal;

          if ($(this).attr('data-orig') && system == 'met') {
            $(this).text($(this).attr('data-orig'));
          } else {
            var newVal = (parseFloat($(this).text()) * multiplier).toFixed(decimel);
            $(this).text(newVal);
          }
        }
      });
    }
});