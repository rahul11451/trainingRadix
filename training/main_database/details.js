$(document).ready(function(){
    $(document.body).on('click','.delete', function(){

        if(confirm('Are you Sure to delete this employee details?')){
            var id_value = $(this).prev('.deleteValue').attr("id");
            alert(id_value);
            
            $.ajax({
                url : 'details.php',
                type : 'post',
                data : {
                    'action' : 'id_value',
                    'data' : id_value
                },
                success : function(response){
                    alert(response);
                }
            });
        }
    });
})