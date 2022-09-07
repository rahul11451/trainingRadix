$(document).ready(function () {
    var valId = $('.starVal').val();
    for (var i = 1; i <= valId; i++) {
        $('#'+i).addClass('text-success');
    }

    $(document.body).on('click', '.star', function () {
        var valId = $(this).attr('id');
        // console.log(valId);
        for(var i=1; i <= valId; i++){
            if ($('#'+valId).hasClass('text-success')) {
                for(var j = 5; j > valId; j--){
                    $('#'+j).removeClass("text-success");
                }
            } else {
                $('#'+i).addClass('text-success');
            }
        }
        $('.starVal').val(valId);
    });

    var mess = $('.mess').text();
    if(mess === "Successfully Data Submitted"){
        setTimeout(function() { window.location.href = 'hotelManage.php'; }, 1000);
    }

})