$(function(){
    function banner_scroll(){
        $(".banner").stop().animate({marginLeft:"-1346px"},1000,"linear",function(){
            $(".banner").css({marginLeft:"0px"});
            $(".banner li:first").remove().clone(true).appendTo(".banner");
        });
    }
    var banner_timer=setInterval(banner_scroll,4000);
    $(".banner,.left_button,.right_button").hover(function(){
        clearInterval(banner_timer);
    },function(){
        banner_timer=setInterval(banner_scroll,4000);
    });
    $(".left_button").click(function(){
        banner_scroll();
    });
    $(".right_button").click(function(){
        $(".banner").css({marginLeft:"-1346px"});
        $(".banner li:last").remove().clone(true).prependTo(".banner");
        $(".banner").stop().animate({marginLeft:"0px"},1000);
    });
    $(".banner_down ul li").hover(function(){
        var i=$(this).index();
        $(".banner_down ul li:nth-child("+(i*1+1)+") .down_go").stop().animate({marginLeft:"-50px"});
    },function(){
        $(".banner_down ul li .down_go").stop().animate({marginLeft:"-300px"});
    });
});