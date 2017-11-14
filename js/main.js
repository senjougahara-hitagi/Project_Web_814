$(document).ready(function() {
    $("#Glide").glide({
        type: 'carousel',
        paddings: '20%',
        startAt: 1,
        touchDistance: 2
    });

    $.ajax({
        type: 'post',
        url: 'php/cart_controller.php',
        data:{
            totalCartItems: "totalitems"
        },
        success:function(response) {
            if(response != 0){
                document.getElementById("total_items").value = $.parseJSON(response)["total_number"];
                document.getElementById("total_items").style.opacity = 1;
            }
        }
    });
});
