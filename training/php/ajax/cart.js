$(document).ready(function(){
    var productId = $(".parent").attr("id");
    if(productId != undefined && productId.length){
        $(".checkout").removeClass("d-none");
        $(".delete").removeClass("d-none");
    } else {
        $(".message").text("Sorry You have not selected any product!!!");
    }


    $('.addition').click(function () {
        $(this).prev().val(+$(this).prev().val() + 1);
    });
    $('.sub').click(function () {
        if ($(this).next().val() > 1) {
            if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
        }
    });


    // save changes
    $(".save").click(function(){
        var productId = $(this).parents(".parent").attr("id");
        var quantity = $("#value"+productId).val();
        console.log(quantity);
        console.log(productId);

        $.ajax({
            url: 'cart.php',
            type: 'post',
            data: {
                'action':'saveButton',
                'productId' : productId,
                'quantity' : quantity
            },
            success : function (response) { 
                alert('Successfully added product');
                window.location.href = "cart.php";
            }
        });
    });


    // delete product
    $(".delete").click(function(){
        var productId = $(this).parents(".parent").attr("id");

        $.ajax({
            url: 'cart.php',
            type: 'post',
            data: {
                'action':'deleteButton',
                'productId' : productId
            },
            success : function (response) { 
                alert('Successfully delete product');
                window.location.href = "cart.php";
            }
        });
    });


    
});
