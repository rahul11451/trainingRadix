
$(document).ready(function () {

  var logic = function () {
    var validationResponse = $('#registerForm').valid();

    if (validationResponse) {
      var randOtp = $('#randOtp').val();
      $.ajax({
        type: "post",
        url: "registrationForm.php",
        data: {
          'action': 'otpSend',
          'otpVal': randOtp
        },
        success: function (response) {
          if (response == 200) {
            swal({
              title: "Email has been sent",
              text: "Please check your email.",
              icon: "success"
            });
          } else {
            swal({
              title: "Email has not been sent",
              text: "Please check your email address.",
              icon: "error"
            });
          }
        }
      });
      if($('.user').hasClass('d-none')){
        $('.user').removeClass('d-none');

      }

      $('#userOtp').keyup(function () {
        var userOtp = $(this).val();

        if (userOtp.length == 5) {
          if (userOtp == randOtp) {
            swal({
              title: "Email Verified Successfully",
              text: "Please Register your data now.",
              icon: "success",
              button: false,
              timer: 2000
            }).then(
              function (dismiss) {
                if (dismiss !== "timer") {
                  $('.inputData').html('<input class=" btn btn-danger py-2 px-3 btn-block " type="submit" name="register" value="Register" id="regiButton">');
                }
              }
            );
          } else {
            swal({
              title: "Email is not Verified",
              text: "Please try again.",
              icon: "error",
              button: false,
              timer: 2000
            });
          }
        }
      });
    }
  }

  $('#verification').click(logic);

});