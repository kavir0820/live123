<div class="myHeader">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">直播123</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="nav-tab">
                    <li @if ($nav_tab_index == 0) class="active" @endif><a href="/">首页</a></li>
                    <li @if ($nav_tab_index == 1) class="active" @endif><a href="/games">游戏专区</a></li>
                    <li @if ($nav_tab_index == 2) class="active" @endif><a href="/girls">美女专区</a></li>
                    <li @if ($nav_tab_index == 3) class="active" @endif><a href="/movies">影视专区</a></li>
                    <li @if ($nav_tab_index == 4) class="active" @endif><a href="/sports">运动户外</a></li>
                </ul>
                <form class="navbar-form navbar-right" role="search" action="/search" method="get">
                    <div class="form-group" id="navform">
                        <input type="text" name="query" class="form-control" value="{{$query}}" placeholder="请输入关键词搜索" style="width: 250px">
                    </div>
                    <button type="submit" class="btn btn-default">搜索</button>
                </form>
            </div>
        </div>
    </nav>
</div>
