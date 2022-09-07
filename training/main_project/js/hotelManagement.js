$(document).ready(function () {
    $('#tabledata').DataTable();
    $(document.body).on('click', '.delete', function () {

        if (confirm('Are you Sure to delete this employee details?')) {
            var id_value = $(this).prev('.deleteValue').attr("id");

            $.ajax({
                url: 'hotelManage.php',
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

    $(document.body).on('click', '.edit', function (e) {
        var id_values = $(this).next('.deleteValue').attr("id");

        $.ajax({
            url: 'hotelManage.php',
            type: 'post',
            data: {
                'action': 'edit',
                'data_edit': id_values
            },
            success: function (response) {
                console.log(response);
                e.preventDefault();
            }
        });
    });

    $(document.body).on('click', '.stat', function () {
        if ($(this).prop('checked') == true) {
            var statusResult = '1';
        } else {
            var statusResult = '0';
        }

        var id = $(this).attr('id');

        $.ajax({
            url: 'hotelManage.php',
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


    $(".state").change(function () {
        var state = $(this).val();
        $.ajax({
            url: 'hotelManage.php',
            type: 'post',
            data: {
                'action': 'stateSelect',
                'state': state
            },
            success: function (response) {
                var result = response.split(',');
                $('#city').html(result[0]);
                $('#loc').html(result[1]);
            }
        });

        if (state == '') {
            search();
        }
    });

    var search = function () {
        var loc = $('#loc').val();
        var city = $('#city').val();
        var state = $('#state').val();
        $.ajax({
            url: 'hotelManage.php',
            type: 'post',
            data: {
                'action': 'searchData',
                'state': state,
                'city': city,
                'location': loc
            },
            success: function (response) {
                $('#datas').html(response);
            }
        });
    }
    $(".loc").change(search);

})