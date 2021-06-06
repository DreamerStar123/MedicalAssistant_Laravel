jQuery(document).ready(function($){
  if ($('#booking_form').length == 0) {
    return;
  }
  var datepicker = $('#datetimepicker'), form = $('#booking_form'), dateField = form.find('#booking_date');
  datepicker.datetimepicker({
    inline: true,
    format:'Y-m-d H:i:s',
    minDate: 0,
    minTime: '09:00',
    maxTime: '20:00',
    step: 30,
    defaultTime: '09:00'
  });
  $('.save_booking').click(function(e){
    e.preventDefault();
    var d = datepicker.datetimepicker('getValue');
    dateField.val(d.toLocaleString());
    form.submit();
  })
});
