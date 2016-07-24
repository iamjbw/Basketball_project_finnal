jQuery.extend({
    jqzoom:function(simg,bimg,dbimg,zoom){
        simg.hover(function () {
            var l = $(this).get(0).offsetLeft;
            var t = $(this).get(0).offsetTop;
            var w = $(this).get(0).offsetWidth;
            var h = $(this).get(0).offsetHeight;
            dbimg.css({left: l + w + 10 + "px", top: 0, display: "block"})
            var bw = bimg.get(0).offsetWidth;
            var bh = bimg.get(0).offsetHeight;
            var scale_x = bw / w;
            var scale_y = bh / h;
            zoom.css({display: "block"});
            $(this).mousemove(function (e) {
                var bx = (e.pageX ) * scale_x-900;
                var by = (e.pageY - t) * scale_y-400;
                dbimg.get(0).scrollLeft = bx;
                dbimg.get(0).scrollTop = by;
                zoom.css({left: e.pageX-360 + "px", top: e.pageY-130+ "px"});
            })
        }, function () {
            dbimg.css({display: "none"});
            zoom.css({display: "none"});
        })
    }
});