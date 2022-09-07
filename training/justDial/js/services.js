$(document).ready(function () {
	$('#display').DataTable();

	$('.delete').click(function () {
		if (confirm('Are you Sure to delete this service?')) {
            var deleteId = $(this).prev('.deleteValue').attr("id");

            $.ajax({
                url: 'serviceList.php',
                type: 'post',
                data: {
                    'action': 'delete',
                    'data': deleteId
                },
                success: function (response) {
                    alert(response);
                }
            });
        }
	});

    // user service list
    // search logic

    $('.searchData').keyup(function (event) { 
        var keycode = event.keyCode;
        var key = event.key;
        if(keycode == '13'){
            var searchData = $('.searchData').val();
            $.ajax({
                url: 'serviceList.php',
                type: 'post',
                data: {
                    'action': 'search',
                    'search': searchData
                },
                success: function (response) {
                    var res = response.split('$');
                    $('.searchResult').html(res[0]);
                    $('.pages').html(res[1]);
                }
            });
        }
    });

    $('#serSearch').change(function () { 
        var values = $(this).val();
        $.ajax({
            url: 'serviceList.php',
            type: 'post',
            data: {
                'action': 'serviceValue',
                'values': values
            },
            success: function (response) {
                var res = response.split('$');
                    $('.searchResult').html(res[0]);
                    $('.pages').html(res[1]);
            }
        });
    });
    
    $('.contactUs').click(function () { 
        var valId = $(this).attr('id');
        $.ajax({
            url: 'serviceList.php',
            type: 'post',
            data: {
                'action': 'contactValue',
                "idVal": valId
            },
            success: function (response) {
                // console.log(valId);
                if(response == 1) {
                    window.location.href = "http://nensi.localhost/justDial/view/login.php";
                } else {
                    window.location.href = "http://nensi.localhost/justDial/view/user/contact.php?providerId="+valId
                }
            }
        });
    });
});