
@extends('_layouts.default')

@section('content')

    <div class="container living-con">
        <div class="living-tit">
            <h3 class="all-lives">美女直播</h3>
            <span class="living-tit-info">共<span class="tit-total">{{$live_num[1]->Value}}</span>场直播</span>
        </div>
        <div class="living-item">
            <div class="row">
                @foreach($list as $item)
                    @include('list_item')
                @endforeach
            </div>
        </div>
    </div>

@endsection