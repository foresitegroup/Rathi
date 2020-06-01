$(document).ready(function() {
  var id_lookup = $('#home-lookup');
  var id_fp = $('#home-find-part');
  var id_man = $('#home-manufacturer');
  var id_mod = $('#home-model');
  var id_ts = $('#home-type-size');
  var id_fmp = $('#home-find-my-part');
  var id_fpr = $('#home-find-part-results');
  var fpr_id = 'home-find-part-results';
  
  // Disable fields
  $(id_mod).closest('.select').addClass("disabled");
  $(id_ts).closest('.select').addClass("disabled");
  $(id_mod).add(id_ts).add(id_fmp).prop('disabled', true);

  var manufacturer;

  $(id_man).change(function() {
    manufacturer = $(this).val();

    $.ajax({
      type: "POST", cache: false,
      url: "ajax-model.php",
      data: 'manufacturer='+ manufacturer,
      success: function(html) { $(id_mod).html(html); }
    });
    
    $(id_lookup).addClass('no-result');
    $(id_mod).add(id_ts).add(id_fmp).prop('disabled', true);
    $(id_mod).closest('.select').addClass("disabled");
    $(id_ts).closest('.select').addClass("disabled");
    $(id_ts).val('');

    if ($(this).val()) {
      $(id_mod).prop('disabled', false);
      $(id_mod).closest('.select').removeClass("disabled");
    }
  });

  $(id_mod).change(function() {
    $.ajax({
      type: "POST", cache: false,
      url: "ajax-type-size.php",
      data: 'manufacturer='+ manufacturer +'&model='+ $(this).val(),
      success: function(html) { $(id_ts).html(html); }
    });
    
    $(id_lookup).addClass('no-result');
    $(id_ts).add(id_fmp).prop('disabled', true);
    $(id_ts).closest('.select').addClass("disabled");
    if ($(this).val()) {
      $(id_ts).prop('disabled', false);
      $(id_ts).closest('.select').removeClass("disabled");
    }
  });

  $(id_ts).change(function() {
    $(id_lookup).addClass('no-result');
    $(id_fpr).removeClass('part-found');
    $(id_fmp).prop('disabled', true);
    if ($(this).val()) $(id_fmp).prop('disabled', false);
  });

  $(id_fp).submit(function(event) {
    event.preventDefault();

    $.ajax({
      type: 'POST',
      url: $(id_fp).attr('action'),
      data: $(id_fp).serialize() + '&fpr_id='+fpr_id+'&topdir='+TopDir+'&src=ajax'
    })
    .done(function(response) {
      $(id_lookup).removeClass('no-result');
      $(id_fpr).html(response);
    });
  });
});