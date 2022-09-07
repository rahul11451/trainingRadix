$(document).ready(function(){
    
    $("#register").click(function(){
        var name = $('#name').val();
    var email = $('#email').val();
    var number = $('#number').val();
    var password = $('#password').val();
    var rePassword = $('#rePassword').val();
        if(name == ''){
            $('#nameErr').text('Please Enter Your Name');
        }
        if(email == ''){
            $('#emailErr').text('Please Enter Your Email');
        }
        if(number == ''){
            $('#numberErr').text('Please Enter Your Number');
        }
            if(!number.match('/[0-9]{10}/')){
                $('#numberErr').text('Only 10 number digit allowed');

             
        } 
        if(password == ''){
            $('#passErr').text('Please Enter Your Password');
        }
        if(rePassword == ''){
            $('#rePassErr').text('Please Enter Your Password Again');
        } 
            if(rePassword !== password){
                $('#rePassErr').text('Your Password is not matched');

            
        }
    });
});