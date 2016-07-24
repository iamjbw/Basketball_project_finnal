$(function(){
    $(".container_cover").animate({width:"1364px"},4500).animate({height:"58px"},1500);
    $(".show").animate({opacity: "1"},1500);
    $(".hot li").hover(function(){
        var m=$(this).index();
        $(".hot li div").eq(m).stop().animate({opacity: "1"},500);
    },function(){
        var m=$(this).index();
        $(".hot li div").eq(m).stop().animate({opacity: "0"},500);
    });
    $(".hot_small_left li").hover(function(){
        var m=$(this).index();
        $(".hot_small_left li div").eq(m).stop().animate({opacity: "1"},500);
    },function(){
        var m=$(this).index();
        $(".hot_small_left li div").eq(m).stop().animate({opacity: "0"},500);
    });
    $(".hot_small_right li").hover(function(){
        var m=$(this).index();
        $(".hot_small_right li div").eq(m).stop().animate({opacity: "1"},500);
    },function(){
        var m=$(this).index();
        $(".hot_small_right li div").eq(m).stop().animate({opacity: "0"},500);
    })
    $(".hot_small_down_left li").hover(function(){
        var m=$(this).index();
        $(".hot_small_down_left li div").eq(m).stop().animate({opacity: "1"},500);
    },function(){
        var m=$(this).index();
        $(".hot_small_down_left li div").eq(m).stop().animate({opacity: "0"},500);
    });
    $(".hot_small_down_right li").hover(function(){
        var m=$(this).index();
        $(".hot_small_down_right div").eq(m).stop().animate({opacity: "1"},500);
    },function(){
        var m=$(this).index();
        $(".hot_small_down_right li div").eq(m).stop().animate({opacity: "0"},500);
    });
    $(".nav li").hover(function(){
        $(this).stop().animate({top:"0px",left:"26px"},200);
    },function(){
        $(this).stop().animate({top:"0",left:"0px"},200);
    });
    $(".user_top").hover(function(){
        $(this).stop().animate({right:"-4px"},300);
    },function(){
        $(this).stop().animate({right:"-36px"},300);
    });


    $(".nall").click(function(){
        var num=$(".inside_body .show").index();
        $(".inside_body > div").eq(num).siblings("div").animate({right:"-200px",opacity: "0"},1000).css({"z-index":"15"});
        $(".show").animate({left:"0",opacity: "1"},1000);
        $(".show").css({"z-index":"18"});
        clearInterval(timer);
    });
    $(".nshoes").click(function(){
        var num=$(".inside_body .shoes").index();
        $(".inside_body > div").eq(num).siblings("div").animate({right:"-200px",opacity: "0"},1000).css({"z-index":"15"});
        $(".shoes").animate({left:"0",opacity: "1"},1000);
        $(".shoes").css({"z-index":"18"});
        setTimeout(shoes,200);
        timer=setInterval(shoes,2000);
    });
    $(".ngame").click(function(){
        var num=$(".inside_body .game").index();
        $(".inside_body > div").eq(num).siblings("div").animate({left:"-200px",opacity: "0"},1000).css({"z-index":"15"});
        $(".game").animate({right:"400px",opacity: "1"},1000);
        $(".game1").animate({top:"0",opacity: "1"},3000);
        $(".game2").animate({top:"0",opacity: "1"},2500);
        $(".game3").animate({top:"0",opacity: "1"},2000);
        $(".game4").animate({top:"0",opacity: "1"},1500);
        $(".game").css({"z-index":"18"});
        clearInterval(timer);
    });
    $(".game1").mouseover(function(){
        $(this).stop().animate({width:"340px",height:"540px",top:"0px",left:"320px"},500);
        $(".game2").stop().animate({width:"130px",height:"240px",left:"330px"},500);
        $(".game3").stop().animate({width:"130px",height:"240px",left:"340px"},500);
        $(".game4").stop().animate({width:"130px",height:"240px",left:"350px"},500);
    });
    $(".game2").mouseover(function(){
        $(this).stop().animate({width:"340px",height:"540px",top:"0px",left:"300px"},500);
        $(".game3").stop().animate({width:"130px",height:"240px",left:"310px"},500);
        $(".game1").stop().animate({width:"130px",height:"240px",left:"290px"},500);
        $(".game4").stop().animate({width:"130px",height:"240px",left:"320px"},500);
    });
    $(".game3").mouseover(function(){
        $(this).stop().animate({width:"340px",height:"540px",top:"0px",left:"200px"},500);
        $(".game1").stop().animate({width:"130px",height:"240px",left:"180px"},500);
        $(".game2").stop().animate({width:"130px",height:"240px",left:"190px"},500);
        $(".game4").stop().animate({width:"130px",height:"240px",left:"210px"},500);
    });
    $(".game4").mouseover(function(){
        $(this).stop().animate({width:"340px",height:"540px",top:"0px",left:"100px"},500);
        $(".game1").stop().animate({width:"130px",height:"240px",left:"70px"},500);
        $(".game2").stop().animate({width:"130px",height:"240px",left:"80px"},500);
        $(".game3").stop().animate({width:"130px",height:"240px",left:"90px"},500);
    });



    var num=0;
    var timer;
    function shoes(){
        if(num>3){
            num=0;
        }
        $(".shoes_circle").eq(num).addClass("ll").siblings().removeClass("ll");
        $(".shoes_left_pic").animate({left:-900+300*num+"px"},1000);
        $(".shoes_mid_pic").animate({top:-400*num+"px"},1000);
        $(".shoes_right_pic").animate({left:-300*num+"px"},1000);
        num++;
    }
    $(".shoes_circle").hover(
        function(){
            clearInterval(timer);
            var m=$(this).index();
            $(this).addClass("ll").siblings().removeClass("ll");
            $(".shoes_left_pic").stop().animate({left:-900+300*m+"px"},1000);
            $(".shoes_mid_pic").stop().animate({top:-400*m+"px"},1000);
            $(".shoes_right_pic").stop().animate({left:-300*m+"px"},1000);
        },
        function(){
            timer=setInterval(shoes,2000);
        });
});