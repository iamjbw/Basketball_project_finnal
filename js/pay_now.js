$(function(){
    $("#pay_now").click(function(){
        var v_gid=$("#gid").val();
        var v_price=$("#price").val();
        var v_size=$("#size").val();
        var v_number=$("#number").val();
        var v_count=$("#count").val();
        var v_uid=$("#uid").val();
        $.ajax({
            type:"GET",
            url:"product_buy.php",
            data:"gid="+v_gid+"&price="+v_price+"&size="+v_size+"&number="+v_number+"&count="+v_count+"&uid="+v_uid,
            success:function(msg){
                alert(msg);
                location.href="single_product.php?gid="+v_gid+"";
            }
        });
    });
});