
$(document).ready(function(){

    // login form
    $('#loginForm').validate({
        rules: {
            userId: 'required',
            password: 'required'
        },
        messages: {
            userId: '<span class="text-danger">Name is required</span>',
            password: '<span class="text-danger">Password is required</span>'
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
            password: 'required',
            repassword: 'required'
        },
        messages: {
            name: '<span class="text-danger">Name is required</span>',
            email: '<span class="text-danger">Emaild is required</span>',
            mobile: '<span class="text-danger">Mobile Number is required</span>',
            password: '<span class="text-danger">Password is required</span>',
            repassword: '<span class="text-danger">Password is required</span>'
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
            name: '<span class="text-danger">Service Name is required</span>',
            desc: '<span class="text-danger">Description is required</span>'
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
            name: '<span class="text-danger">Business Name is required</span>',
            email: '<span class="text-danger">Email is required</span>',
            phoneNumber: '<span class="text-danger">Phone Number is required</span>',
            address: '<span class="text-danger">Address is required</span>',
            city: '<span class="text-danger">City is required</span>',
            pincode: '<span class="text-danger">Pincode is required</span>'
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
});