$(document).ready(function(){
    $(document.body).on('click','.delete', function(){

        if(confirm('Are you Sure to delete this employee details?')){
            var id_value = $(this).prev('.deleteValue').attr("id");
            alert(id_value);
            
            $.ajax({
                url : 'listing.php',
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


    $(document.body).on('click','.edit',function(){
        var id_value = $(this).next('.deleteValue').attr("id");

        $.ajax({
            url : 'listing.php',
            type : 'post',
            data : {
                'action' : 'edit',
                'data_edit' : id_value
            },
            success : function(response){
                console.log(response);
            }
        });
    });

    $('.searchClick').click(function(){
        var searchData = $('.searchData').val();
        $.ajax({
            url : 'listing.php',
            type : 'post',
            data : {
                'action' : 'search',
                'search' : searchData
            },
            success : function(response){
                $('.nen').html(response);
            }
        });

    });
})