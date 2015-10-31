
@extends('_layouts.default')

@section('content')

    <div class="container games-con">
        <div class="games-tit">
            {{--<div class="games-tit-icon"></div>--}}
            <h3 class="all-games">全部游戏</h3>
            <div class="games-tit-info">
                <span class="list">共<i class="tit-total">{{$games_num[0]->num}}</i>个游戏</span>
                <span class="list"><i class="tit-total">{{$live_num[0]->num}}</i>场直播</span>
                <span class="list"><i class="tit-total">{{$viewers_num[0]->num}}</i>人观看</span>
            </div>
            {{--<a href="/games-dir?from=homegameindex" target="_blank" class="more-games">--}}
                {{--<i class="sprite more-games-icon"></i>--}}
                {{--<span>全部游戏</span>--}}
            {{--</a>--}}
        </div>
        <div class="games-item">
            <div class="row">
                @foreach($games_list as $game)
                    @include('games_item')
                @endforeach
            </div>
        </div>
    </div>

@endsection