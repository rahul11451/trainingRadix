$(document).ready(function(){

    $('#update').click(function(e){
        var name = $('#name').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var photo = $('#photo').val();
        var phone = $('#phone').val();
        var date = $('#dob').val();
        var gender = $("input[name='genderIn']:checked").val();
        var add = $('#address').val();
        var city = $('#city option:selected').val();
        var pin = $('#pincode').val();
        if(name == ''){
            $('#erName').text('Name is Required');
            e.preventDefault();
        }
        if(email == ''){
            $('#erEmail').text('Email is Required');
            e.preventDefault();
        }
        if(password == ''){
            $('#erPassword').text('Password is Required');
            e.preventDefault();
        }
        // if(photo == ''){
        //     $('#erPhoto').text('Photos is Required');
        //     e.preventDefault();
        // }
        if(phone == ''){
            $('#erPhone').text('Phone Number is Required');
            e.preventDefault();
        }
        if(date == ''){
            $('#erDate').text('Birth Date is Required');
            e.preventDefault();
        }
        if(gender == ''){
            $('#erGender').text('Gender is Required');
            e.preventDefault();
        }
        if(city == ''){
            $('#erCity').text('City is Required');
            e.preventDefault();
        }
        if(pin == ''){
            $('#erPin').text('Pincode is Required');
            e.preventDefault();
        }
        if(add == ''){
            $('#erAdd').text('Address is Required');
            e.preventDefault();
        }
    });

    $(".city").change(function() {
        var city = $(this).val();
        $.ajax({
            url: 'editUserForm.php',
            type: 'post',
            data : {
                'action': 'citySelect',
                'city': city
            },
            success : function (response){
                var result = response.split(',');
                $('#state').html(result[1]);
                $('#country').html(result[2]);
            }
        });
    });
    
})