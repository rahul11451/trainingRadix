$(document).ready(function () {
    $("#submit").on("click", function () {
        var name = $('#userName').val();
        var userMess = $("#userMess1").val();
        if (name == '') {
            $("#nameError").text('Please Enter Name');
        }
        if (userMess == '') {
            $("#messageError").text('Please Enter Message');
        }
        if (userMess != '' && name != '') {
            $("#nameError").text('');
            $("#messageError").text('');
            $.ajax({
                url: 'chatApplication.php',
                type: 'post',
                data: {
                    'action': 'enter',
                    'name': name,
                    'message': userMess
                },
                success: function () {
                    $("#userName").val(' ');
                    $("#userMess1").val(' ');
                    $("#success").text('success');
                }
            });


        }
    });
    setInterval(function () {
        $.ajax({
            url: 'chatApplication.php',
            type: 'post',
            data: {
                'action': 'read'
            },
            success: function (response) {
                $("#messageAns").text(response);
            }
        })
    }, 1000);

});

