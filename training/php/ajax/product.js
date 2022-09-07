$(document).ready(function(){

    $('.addition').click(function () {
        $(this).prev().val(+$(this).prev().val() + 1);
    });
    $('.sub').click(function () {
        if ($(this).next().val() > 1) {
            if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
        }
    });

    $("#cartAll").click(function(){
        if($(".cart1").is(':checked')){
            $(".cart1").prop('checked', false);
        } else {
            $(".cart1").prop('checked', true);
        }
    });


    // add one product
    $(".addToCart").click(function(){
        var productId = $(this).parents("#cartParent").find(".cart1").attr("id");
        var quantity = $("#value"+productId).val();
        console.log(quantity);
        console.log(productId);

        $.ajax({
            url: 'product.php',
            type: 'post',
            data: {
                'action':'checkButton',
                'productId' : productId,
                'quantity' : quantity
            },
            success : function (response) { 
                alert('Successfully added product');
            }
        });
    });


    // add to all product
    $(".addToAll").click(function(){
        var flag = 0;
        if($(".cart1").is(':checked') || $("#cartAll").is(':checked')){
            var productId = {};
            var class1 = $(".cart1");
            class1.each(function(){
                if($(this).is(':checked')){
                    var pid = $(this).attr("id");
                    productId[$(this).attr("id")] = $("#value"+pid).val();
                    
                } 
            }); 
            flag = 1;
        } 
        if(flag == 0){
            alert('Please select checkbox');
            return false;
        }
            $.ajax({
                url: 'product.php',
                type: 'post',
                data: {
                    'action':'checkAll',
                    'productIdAll' : productId,
                },
                success : function (response) { 
                    console.log(response);
                    alert('Successfully added product');
                }
            });
        });
        
    
});
