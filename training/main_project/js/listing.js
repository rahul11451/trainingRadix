$(document).ready(function () {
    
    $('.search').click(function () { 
        var searchData = $('.searchData').val();
            $.ajax({
                url: 'listing.php',
                type: 'post',
                data: {
                    'action': 'search',
                    'search': searchData
                },
                success: function (response) {
                    $('.nen').html(response);
                }
            });
    });

    $('.searchClick').keyup(function (event) {
        var keycode = event.keyCode;
        var key = event.key;
        if(keycode == '13' || key ==='Backspace'){
            var searchData = $('.searchData').val();
            $.ajax({
                url: 'listing.php',
                type: 'post',
                data: {
                    'action': 'search',
                    'search': searchData
                },
                success: function (response) {
                    $('.nen').html(response);
                }
            });
        }
    });

    // FILTER

    $(".state").change(function() {
        var state = $(this).val();
        $.ajax({
            url: 'listing.php',
            type: 'post',
            data : {
                'action': 'stateSelect',
                'state': state
            },
            success : function (response){
                var result = response.split(',');
                $('#city').html(result[0]);
                $('#loc').html(result[1]);
            }
        });

        if(state == ''){
            search();
        }
    });

    var search = function() {
        var loc = $('#loc').val();
        var city = $('#city').val();
        var state = $('#state').val();
        $.ajax({
            url: 'listing.php',
            type: 'post',
            data : {
                'action': 'searchData',
                'state': state,
                'city': city,
                'location': loc
            },
            success : function (response){
                $('.nen').html(response);
            }
        });
    }
    $(".loc").change(search);


})