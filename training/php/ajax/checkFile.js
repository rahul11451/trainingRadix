$(document).ready(function(){
    $("#submit").on("click",function(){
        var fileName = $("#fileName").val();
        if(fileName == ''){
            $('#output').text('Please Enter Filename');
        } else {
            $.ajax({
                url: 'checkFile.php',
                type: 'post',
                data: {
                    'action':'checkButton',
                    'name' : fileName
                },
                success : function (data) { 
                    $("#op").text(data);
                }
            });
        }
    });
});

