// show loginmodal start  here-------
$(document).ready(function() {             $('#reviewModal').modal('hide');
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
});
// END
 // clear modal input on close start here-------

 $('#reviewModal').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
  })
  // END