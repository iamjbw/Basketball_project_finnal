$(function(){
    var i=0;
    function small_scroll(){
        $(".pic_small").stop().animate({marginLeft:"-105px"},300,"linear",function(){
            $(".pic_small").css({marginLeft:"0px"});
            var v_big=$(".pic_small li:eq(1) img").attr("src");
            var v_zoom=v_big.slice(0,v_big.indexOf("."))+"big"+v_big.slice(-4);
            $(".open_img img").attr("src",v_zoom);
            $(".pic_big img").attr("src",v_big);
            $(".pic_small li:first").remove().clone(true).appendTo(".pic_small");
            $(".pic_small li img").click(function(){
                var v_big=$(this).attr("src");
                $(".pic_big img").attr("src",v_big);
            });
        });
    }
    $(".pic_small li img").click(function(){
        var v_big=$(this).attr("src");
        $(".pic_big img").attr("src",v_big);
        var v_zoom=v_big.slice(0,v_big.indexOf("."))+"big"+v_big.slice(-4);
        $(".open_img img").attr("src",v_zoom);
    });
    $(".small_point_left").click(function(){
        small_scroll();
    });
    $(".small_point_right").click(function(){
        var v_big=$(".pic_small li:eq(-1) img").attr("src");
        $(".pic_big img").attr("src",v_big);
        var v_zoom=v_big.slice(0,v_big.indexOf("."))+"big"+v_big.slice(-4);
        $(".open_img img").attr("src",v_zoom);
        $(".pic_small").css({marginLeft:"-105px"});
        $(".pic_small li:last").remove().clone(true).prependTo(".pic_small");
        $(".pic_small").stop().animate({marginLeft:"0px"},300);
    });
    setTimeout(small_scroll,100);
    var small_timer=setInterval(small_scroll,5000);
    $(".pic_small,.small_point_right,.small_point_left").hover(function(){
        clearInterval(small_timer);
    },function(){
        small_timer=setInterval(small_scroll,5000);
    });
    $(".pic_big").hover(function(){
        clearInterval(small_timer);
    },function(){
        small_timer=setInterval(small_scroll,5000);
    });
    $(".reduce").click(function(){
        var inp=$(".right_side_content .product_number input").val();
        if(inp>0){
            inp--;
            $(".right_side_content .product_number input").val(inp);
        }
        if(inp==0){
            alert("至少选择一个商品");
        }
    });
    $(".plus").click(function(){
        var inp=$(".right_side_content .product_number input").val();
        var v_save=Number($(".saved>span").text());
        if(inp<v_save){
            inp++;
            $(".right_side_content .product_number input").val(inp);
        }
        if(inp>=v_save){
            alert("超出库存数量，请减少购买数量");
        }
    });
    $(".right_side_content .product_number input").change(function(){
        var v_save=Number($(".saved>span").text());
        if($(this).val()>v_save || $(this).val()<0){
            alert("请输入正确的购买数量");
        };
    });
    function down_scroll(){
        $(".product_down ul").stop().animate({marginLeft:"-192px"},1000,"linear",function(){
            $(".product_down ul").css({marginLeft:"0px"});
            $(".product_down ul li:first").remove().clone(true).appendTo(".product_down ul");
        });
    }
    var down_timer=setInterval(down_scroll,2000);
    $(".product_down ul li,.point_left,.point_right").hover(function(){
        clearInterval(down_timer);
    },function(){
        down_timer=setInterval(down_scroll,2000);
    });
    $(".point_left").click(function(){
        down_scroll();
    });
    $(".point_right").click(function(){
        $(".product_down ul").css({marginLeft:"-190px"});
        $(".product_down ul li:last").remove().clone(true).prependTo(".product_down ul");
        $(".product_down ul").stop().animate({marginLeft:"0px"},1000);
    });
    var v_bg=-1;
    $(".single_body .product_show .right_side_content ul li").toggle(function(){
            $(this).css({background:"#ffaf04"}).siblings().css({background:"#555"});
            v_bg=$(this).index();
    },function(){
            $(this).css({background:"#555"});
    });
    $("#buy_now").click(function(){
        if(v_bg>=0){
            var v_gid=$("#hide_gid").val();
            var v_size=$(".single_body .product_show .right_side_content ul li:eq("+v_bg+")").text();
            var v_price=Number($("#product_price>span").text());
            var v_number=$(".product_number input").val();
            var v_count=v_number*v_price;
            var v_uid=$("#hide_uid").val();
            if(v_uid!=null){
                //$.ajax({
                //    type:"GET",
                //    url:"product_buy.php",
                //    data:"gid="+v_gid+"&price="+v_price+"&size="+v_size+"&number="+v_number+"&count="+v_count+"&uid="+v_uid,
                //    success:function(msg){
                //        alert(msg);
                //    }
                //});
                location.href="pay_page.php?gid="+v_gid+"&price="+v_price+"&size="+v_size+"&number="+v_number+"&count="+v_count+"&uid="+v_uid;
            }else{
                location.href="login_page.php?page=4&gid="+v_gid+"";
            }
        }else{
            alert("请选择一个尺码");
        }
    });
    jQuery.jqzoom($(".pic_big"),$(".open_img img"),$(".open_img"),$(".small_block"));
});