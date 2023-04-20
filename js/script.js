// show loginmodal start  here-------
$(document).ready(function() {             $('#loginModal').modal('hide');
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
});
// END

// show SignUpmodal start  here-------
$(document).ready(function() {             $('#SignUpmodal').modal('hide');
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
});
// END




 // clear modal Signup on close start here-------

 $('#SignUpmodal').on('hidden.bs.modal', function () {
  $(this).find('form').trigger('reset');
})
// END

 // clear modal input on close start here-------

$('#loginModal').on('hidden.bs.modal', function () {
  $(this).find('form').trigger('reset');
})
// END

// show password start  here-------
const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
//END


//back to top button start here!//
$(".top").hide();
$(window).scroll(function(e){
  if ($(this).scrollTop() > 0) {
      $(".top").css("display", "block");
  } else {
      $(".top").css("display", "none");
  }
});


// END
