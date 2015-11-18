<!DOCTYPE html>
<html>
<head lang="zh-CN">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>直播123--全网直播数据导航</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
</head>
<body>

@include('_layouts.nav')

<div class="myBody">
    @yield('content')
</div>

@include('_layouts.footer')

<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
<script>
    $("img.lazy").lazyload({ threshold : 200 });
</script>
<script>
    $(function () {
        (function ($) {
            $.getUrlParam = function (param_name) {
                var reg = new RegExp("(^|&)" + param_name + "=([^&]*)(&|$)");
                var res = window.location.search.substr(1).match(reg);
                if (res != null) return decodeURI(res[2]);
                return null;
            }
        })(jQuery);
    });

    function scrollside() {
        var items = $(".list-item");
        var lastitemHeight = items.last().get(0).offsetHeight;
        var scrollHeight = $(window).scrollTop();
        var documentHeight = $(document).height();
        var windowHeight = $(window).height();
        return (scrollHeight + lastitemHeight + windowHeight) > documentHeight ? items.length : -1;
    }
</script>
<script>
    $(document).ready(function() {
        var pathname = window.location.pathname;
        var param_name = $.getUrlParam('name');
        $("#nav-tab li").each(function () {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
            }
            var cur_href = $(this).children("a").attr("href");
            if (cur_href == pathname) {
                $(this).addClass("active");
                return false;
            }
        });

        if (pathname == '/games') {
            // 设置游戏专区下的游戏筛选标签
            $(".topbar-tabs .topbar-tab").each(function () {
                if ($(this).hasClass("topbar-tab-selected") && param_name != null) {
                    $(this).removeClass("topbar-tab-selected");
                }
                var cur_href = $(this).children("a").attr("href");
                if (cur_href.indexOf(param_name) >= 0) {
                    $(this).addClass("topbar-tab-selected");
                    return false;
                }
            });
            // 设置living-tit下的h3内容
            $(".living-tit h3").html((param_name != null && param_name != "全部") ? param_name : "全部直播");
        }

        var query_val = $.getUrlParam('query');
        $("#navform input").val(query_val);

        var total_num = parseInt($(".tit-total").text());

        $(window).on("load", function() {
            $(window).scroll(function(){
                if (pathname != '/') {
                    var start = scrollside();
                    if (start > 0 && start < total_num) {
                        var offset = 20;
                        var url = window.location.href;
                        $.get(url, {start: start, offset: offset}, function (data, textStatus) {
                            if (textStatus == 'success') {
                                var row = $(".row");
                                var list_html = $.parseHTML(data);
                                $(".row").append(list_html);
                                $("img.lazy").lazyload({threshold: 200});
                            }
                        });
                    }
                }
            })
        });
    });
</script>
</body>
</html>
