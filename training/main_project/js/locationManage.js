$(document).ready(function () {
    $(document.body).on('click', '.delete', function () {

        if (confirm('Are you Sure to delete this employee details?')) {
            var id_value = $(this).prev('.deleteValue').attr("id");

            $.ajax({
                url: 'locationManage.php',
                type: 'post',
                data: {
                    'action': 'delete',
                    'data': id_value
                },
                success: function (response) {
                    alert(response);
                }
            });
        }
    });

    $(document.body).on('click', '.status', function () {
        if ($(this).prop('checked') == true) {
            var statusResult = '1';
        } else {
            var statusResult = '0';
        }

        var id = $(this).attr('id');

        $.ajax({
            url: 'locationManage.php',
            type: 'post',
            data: {
                'action': 'statusUpdate',
                'statusid': id,
                'statusResult': statusResult
            },
            success: function (response) {
                alert(response);
            }
        });
    });

    var mess = $('.mess').text();
    if(mess === "Successfully Data Submitted"){
        setTimeout(function() { window.location.href = 'locationManage.php'; }, 800);
    }



})