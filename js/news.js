$(function(){
    function banner_scroll(){
        $("#featured_post .news_banner ul").stop().animate({marginLeft:"-630px"},1000,"linear",function(){
            $("#featured_post .news_banner ul").css({marginLeft:"0px"});
            $("#featured_post .news_banner ul li:first").remove().clone(true).appendTo("#featured_post .news_banner ul");
        });
    }
    var banner_timer=setInterval(banner_scroll,4000);
    $("#featured_post .news_banner ul,.news_button_right,.news_button_left").hover(function(){
        clearInterval(banner_timer);
    },function(){
        banner_timer=setInterval(banner_scroll,4000);
    });
    $(".news_button_left").click(function(){
        banner_scroll();
    });
    $(".news_button_right").click(function(){
        $("#featured_post .news_banner ul").css({marginLeft:"-630px"});
        $("#featured_post .news_banner ul li:last").remove().clone(true).prependTo("#featured_post .news_banner ul");
        $("#featured_post .news_banner ul").stop().animate({marginLeft:"0px"},1000);
    });
});