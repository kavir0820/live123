
@extends('_layouts.default')

@section('content')
    <!--热门游戏模块开始 -->
    <div class="container games-con">
        <div class="games-tit">
            {{--<div class="games-tit-icon"></div>--}}
            <h2 class="sprite games-tit-text">热门游戏</h2>
            <div class="games-tit-info">
                <span class="list">共<i class="tit-total">{{$games_num[0]->num}}</i>个游戏</span>
                <span class="list"><i class="tit-total">{{$live_num[0]->num}}</i>场直播</span>
                <span class="list"><i class="tit-total">{{$viewers_num[0]->num}}</i>人观看</span>
            </div>
            <a href="/games-dir?from=homegameindex" target="_blank" class="more-games">
                <i class="sprite more-games-icon"></i>
                <span>全部游戏</span>
            </a>
        </div>
        <div class="games-item">
            <div class="row">
                @foreach($games as $game)
                    @include('games_item')
                @endforeach
            </div>
        </div>
    </div>
    <!-- 热门游戏模块结束 -->
    <!-- 正在直播模块 -->
    <div class="container living-con">
        <div class="living-tit">
            <div class="living-tit-icon"></div>
            <h2 class="star-living-tit-text">正在直播</h2>
            <span class="living-tit-info">共<span class="tit-total">{{$live_num[0]->num}}</span>场直播</span>
            <a href="/games?from=homelivehot" target="_blank" class="more-living">
                <i class="sprite more-living-icon"></i>
                <span>全部直播</span>
            </a>
        </div>
        <div class="living-item">
            <div class="row">
                @foreach($list as $item)
                    @include('list_item')
                @endforeach
            </div>
        </div>
    </div>
    <!-- 正在直播模块结束 -->
    <!-- 美女主播模块开始 -->
    <div class="container girls-con">
        <div class="girls-tit">
            <h2 class="sprite star-girls-tit-text">游戏美女</h2>
            <span class="girls-tit-info">共<i class="tit-total">{{$girls_live_num[0]->num}}</i>场直播</span>
            <a href="/girls?from=homegirls" target="_blank" class="more-girls">
                <i class="sprite more-girls-icon"></i>
                <span>更多美女</span>
            </a>
        </div>
        <div class="girls-item">
            <div class="row">
                @foreach($girls_live_list as $item)
                    @include('list_item')
                @endforeach
            </div>
        </div>
    </div>
    <!-- 美女主播模块结束 -->
    <!-- 英雄联盟模块开始 -->
<div class="container living-con">
    <div class="living-tit">
        <a class="star-tit-link" href="/games?name=英雄联盟&from=homelolindex">
            <i class="star-tit-border"></i>
            <h2 class="sprite star-lol-tit-text">英雄联盟</h2>
        </a>
        <a class="star-tit-link" href="/games?name=英雄联盟&from=homelolindex">
            <span class="living-tit-info">共<span class="tit-total">{{$lol_live_num[0]->num}}</span>场直播</span>
        </a>
        <a href="/games?name=英雄联盟&from=homelolindex" target="_blank" class="more-living">
            <i class="sprite more-living-icon"></i>
            <span>更多直播</span>
        </a>
    </div>
    <div class="living-item">
        <div class="row">
            @foreach($lol_live_list as $item)
                @include('list_item')
            @endforeach
        </div>
    </div>
</div>
    <!-- 英雄联盟模块结束 -->
@endsection