
@extends('_layouts.default')

@section('content')

    <div class="container living-con">
        <div class="living-tit">
            <h3 class="all-lives">"{{$query}}"</h3>
            <span class="living-tit-info">共为您找到相关的&nbsp;<span class="tit-total">{{$live_num[1]->Value}}</span>&nbsp;场直播</span>
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

    {{--@include('list')--}}

@endsection