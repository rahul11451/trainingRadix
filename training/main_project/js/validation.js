$(document).ready(function () {
    $('#form').validate({
        rules: {
            user_name: 'required',
            password: 'required'
        },
        messages: {
            user_name: '<span class="text-danger">User Name is required</span>',
            password: '<span class="text-danger">Password is required</span>'
        },
        submitHandler: function (form) {
            form.submit();
        }
    });


    // add location validation

    $('#addLocationForm').validate({
        rules: {
            location: 'required',
            city: 'required',
            state: 'required',
            sort: 'required'
        },
        messages: {
            location: '<span class="text-danger">Location is required</span>',
            city: '<span class="text-danger">City is required</span>',
            state: '<span class="text-danger">State is required</span>',
            sort: '<span class="text-danger">Sort  number is required</span>'
        },
        submitHandler: function (form) {
            form.submit();
        }
    });


    // add hotel validation

    $('#addHotelForm').validate({
        rules: {
            title: 'required',
            location: 'required',
            city: 'required',
            state: 'required',
            smDesc: 'required'
        },
        messages: {
            title: '<span class="text-danger">Title is required</span>',
            location: '<span class="text-danger">Location is required</span>',
            city: '<span class="text-danger">City is required</span>',
            state: '<span class="text-danger">State is required</span>',
            smDesc: '<span class="text-danger">Small Description is required</span>'
        },
        submitHandler: function (form) {
            form.submit();
        }
    });

    $(document.body).on('click', '.addHotelForm', function () {

        if ($('.starVal').val() == '') {
            $('.stars').html('<span class="text-danger">Hotel rating is required</span>');
        }
    });

});