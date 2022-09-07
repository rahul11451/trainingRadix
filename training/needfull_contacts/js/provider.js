$(document).ready(function () {
	$('#display').DataTable();

	$('.delete').click(function () {
		if (confirm('Are you Sure to delete this service?')) {
            var deleteId = $(this).prev('.deleteValue').attr("id");

            $.ajax({
                url: 'providerList.php',
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
});