<!DOCTYPE html>
<html>
<head lang="zh-CN">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>直播123--全网直播数据导航</title>
    <meta name="title" content="直播123_最专业的全网直播导航">
    <meta name="keywords" content="直播,游戏直播,全网直播,直播导航,英雄联盟,dota,炉石传说,直播大全,魔兽世界,我的世界,小智,若风,斗鱼,战旗,虎牙,yy,火猫,熊猫,直播平台,lyingman,美女主播,户外直播,影视直播,穿越火线,地下城与勇士,星际争霸">
    <meta name="description" content="直播123为目前最专业的全网直播导航,为用户提供所有主流直播平台如斗鱼、战旗、虎牙、龙珠、火猫、熊猫等，并且分门别类整理，用户可以非常方便的找到感兴趣的直播数据以及每天的精彩视频">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
</head>
<body>

@include('_layouts.header')

<div class="myBody">
    @yield('content')
</div>

<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>

<script>

    $("img.lazy").lazyload({ threshold : 200 });

    function getUrlParam(param_name) {
        var reg = new RegExp("(^|&)" + param_name + "=([^&]*)(&|$)");
        var res = window.location.search.substr(1).match(reg);
        if (res != null) return decodeURI(res[2]);
        return null;
    }

    function scrollside() {
        var items = $(".list-item");
        var scrollHeight = $(window).scrollTop();
        var documentHeight = $(document).height();
        var windowHeight = $(window).height();
        return (scrollHeight + windowHeight) >= documentHeight ? items.length : -1;
    }
</script>
<script>
    $(document).ready(function() {
        var pathname = window.location.pathname;
//        var param_name = getUrlParam('name');
        // $("#nav-tab li").each(function () {
        //     if ($(this).hasClass("active")) {
        //         $(this).removeClass("active");
        //     }
        //     var cur_href = $(this).children("a").attr("href");
        //     if (cur_href == pathname) {
        //         $(this).addClass("active");
        //         return false;
        //     }
        // });

//         if (pathname == '/games') {
             // 设置游戏专区下的游戏筛选标签
//             $(".topbar-tabs .topbar-tab").each(function () {
//                 if ($(this).hasClass("topbar-tab-selected") && param_name != null) {
//                     $(this).removeClass("topbar-tab-selected");
//                 }
//                 var cur_href = $(this).children("a").attr("href");
//                 if (cur_href.indexOf(param_name) >= 0) {
//                     $(this).addClass("topbar-tab-selected");
//                     return false;
//                 }
//             });
             // 设置living-tit下的h3内容
//             $(".living-tit h3").html((param_name != null && param_name != "全部") ? param_name : "全部直播");
//         }

        // var query_val = getUrlParam('query');
        // $("#navform input").val(query_val);

        var total_num = parseInt($(".tit-total").text());
//        var load_num = $(".list-item").length;
//        if (load_num < total_num) {
//            // 显示加载更多模块
//            $(".load-more").show();
//        }
//        $(".load-more").click(function () {
//            // 隐藏加载更多模块
//            $(".load-more").hide();
//            // 显示正在加载模块
//            $(".page-loading").show();
//            // 加载数据
//            var start = $(".list-item").length;
//            var offset = 32;
//            var url = window.location.href;
//            $.get(url, {start: start, offset: offset}, function (data, textStatus) {
////                console.log(textStatus);
//                if (textStatus == 'success') {
//                    var row = $(".row");
//                    var list_html = $.parseHTML(data);
//                    $(".row").append(list_html);
//                    $("img.lazy").lazyload({threshold: 200});
//
//                    // 隐藏正在加载模块
//                    $(".page-loading").hide();
//                    // 判断是否需要显示加载更多模块
//                    load_num = $(".list-item").length;
//                    if (load_num < total_num) {
//                        // 显示加载更多模块
//                        $(".load-more").show();
//                    }
//                }
//            });
//        });

        var ajax_status = false;
        $(window).bind("scroll", function() {
            if (pathname != '/' && !ajax_status) {
                var start = scrollside();
                if (start > 0 && start < total_num) {
                    // 显示正在加载模块
                    $(".page-loading").show();
                    var offset = 32;
                    var url = window.location.href;
                    ajax_status = true;
                    $.get(url, {start: start, offset: offset}, function (data, textStatus) {
                        if (textStatus == 'success') {
                            var row = $(".row");
                            var list_html = $.parseHTML(data);
                            $(".row").append(list_html);
                            $("img.lazy").lazyload({threshold: 200});
                            // 隐藏正在加载模块
                            $(".page-loading").hide();
                        }
                        ajax_status = false;
                    });
                }
            }
        })
    });
</script>
<script>
var _hmt = _hmt || [];
(function() {
	var hm = document.createElement("script");
	hm.src = "//hm.baidu.com/hm.js?6431c5743cb1912a3508605804d3483f";
	var s = document.getElementsByTagName("script")[0]; 
	s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>
