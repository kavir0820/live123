
@extends('_layouts.default')

@section('content')
    <div class="container topbar-tabs">
        <div class="topbar-tab topbar-tab-selected">
            <a class="topbar-tab-text" href="/games?name=全部">全部</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=英雄联盟">英雄联盟</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=DOTA2">DOTA2</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=炉石传说">炉石传说</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=穿越火线">穿越火线</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=地下城与勇士">地下城与勇士</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=我的世界">我的世界</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=魔兽世界">魔兽世界</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=星际争霸">星际争霸</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=风暴英雄">风暴英雄</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=魔兽争霸">魔兽争霸</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=三国杀">三国杀</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=棋牌">棋牌竞技</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=QQ飞车">QQ飞车</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=足球竞技">足球竞技</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=跑跑卡丁车">跑跑卡丁车</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=主机游戏">主机游戏</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=格斗游戏">格斗游戏</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=剑灵">剑灵</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=篮球游戏">篮球游戏</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=手游">手游&掌机</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=天涯明月刀">天涯明月刀</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=怀旧游戏">怀旧游戏</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=使命召唤">使命召唤OL</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=暗黑破坏神3">暗黑破坏神3</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=反恐精英">反恐精英</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=神之浩劫">神之浩劫</a>
        </div>
        <div class="topbar-tab">
            <a class="topbar-tab-text" href="/games?name=音乐游戏">音乐游戏</a>
        </div>
        <div class="topbar-tab">
            <a class="tab-link-text" href="/games-dir">查看更多&gt;&gt;</a>
        </div>
    </div>

    <div class="container living-con">
        <div class="living-tit">
            <h3 class="all-lives">全部直播</h3>
            <span class="living-tit-info">共<span class="tit-total">{{$live_num[1]->Value}}</span>场直播</span>
        </div>
        <div class="living-item">
            <div class="row">
                @foreach($list as $item)
                    @include('list_item')
                @endforeach
            </div>
        </div>
        {{--<div class="load-more">--}}
        {{--<span>点击加载更多</span>--}}
        {{--</div>--}}
        <div class="page-loading">
            <span>努力加载中...</span>
        </div>
    </div>
@endsection
