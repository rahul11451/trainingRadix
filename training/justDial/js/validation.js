
$(document).ready(function(){

    // login form
    $('#loginForm').validate({
        rules: {
            userId: 'required',
            password: 'required',
            captcha: 'required'
        },
        messages: {
            userId: 'Name is required',
            password: 'Password is required',
            captcha: 'Captcha is required'
        },
        errorPlacement: function (error, element) {
            error.insertAfter($(element).parent().next());
        },
        submitHandler: function (form) {
            form.submit();
        }
    });

    // login forgot password form
    $('#forgotForm').validate({
        rules: {
            userId: 'required',
            school: 'required'
        },
        messages: {
            userId: 'Name is required',
            school: 'School is required'
        },
        errorPlacement: function (error, element) {
            error.insertAfter($(element).parent().next());
        },
        submitHandler: function (form) {
            form.submit();
        }
    });

    // login reset password form
    $('#resetForm').validate({
        rules: {
            pass: 'required',
            rePass: {
                required: true,
                equalTo: "#loginPass"
            }
        },
        errorPlacement: function (error, element) {
            error.insertAfter($(element).parent().next());
        },
        submitHandler: function (form) {
            form.submit();
        }
    });

    // gorfot password form
    $('#forgotForm').validate({
        rules: {
            userId: 'required',
            school: 'required'
        },
        messages: {
            userId: 'This Field is required',
            school: 'This Field is required'
        },
        errorPlacement: function (error, element) {
            error.insertAfter($(element).parent().next());
        },
        submitHandler: function (form) {
            form.submit();
        }
    });

    // register form
    $('#registerForm').validate({
        rules: {
            name: 'required',
            email: {
                required: true,
                email: true,
                maxlength: 255
             },
            mobile: {
                required: true,
                digits: true,
                maxlength: 10,
                minlength: 10
             },
             school : 'required',
            password: 'required',
            repassword: 'required',
            otp: {
                required: true,
                minlength: 5,
                maxlength: 5,
                digits: true
            }
        },
        messages: {
            name: 'Name is required',
            email: 'Emaild is required',
            mobile: 'Mobile Number is required',
            school: 'This Feild is required',
            password: 'Password is required',
            repassword: 'Password is required'
        },
        errorPlacement: function (error, element) {
            error.insertAfter($(element).parent().next());
        },
        submitHandler: function (form) {
            form.submit();
        }
    });

    // add service
    $('#addServiceForm').validate({
        rules: {
            name: 'required',
            desc: 'required'
        },
        messages: {
            name: 'Service Name is required',
            desc: 'Description is required'
        },
        submitHandler: function (form) {
            form.submit();
        }
    });

    // add service Provider
    $('#addProviderForm').validate({
        rules: {
            name: 'required',
            email: {
                required: true,
                email: true,
                maxlength: 255
             },
            phoneNumber: {
                required: true,
                digits: true,
                maxlength: 10,
                minlength: 10
             },
            address: 'required',
            city: 'required',
            pincode: {
                required: true,
                digits: true,
                maxlength: 6,
                minlength: 6
             }
        },
        messages: {
            name: 'Business Name is required',
            email: 'Email is required',
            phoneNumber: 'Phone Number is required',
            address: 'Address is required',
            city: 'City is required',
            pincode: 'Pincode is required'
        },
        submitHandler: function (form) {
            form.submit();
        }
    });

    $('.togglePassword').click(function(){
        var attribute = $(this).parent().prev().attr('type');
        if(attribute == 'password') {
            $(this).parent().prev().attr('type','text');
        } else {
            $(this).parent().prev().attr('type','password');
        }
    });

    $('.veri').click(function(){
        alert('nen');
    });
});