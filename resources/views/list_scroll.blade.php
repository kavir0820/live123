@foreach($list as $item)
<div class="col-lg-3 col-md-3">
    <a href="{{$item->url}}" target="_blank" class="thumbnail list-item">
        <img class="img-responsive live-img lazy" src="{{url('/images/default_thumb.jpg')}}" data-original="{{$item->img}}" width="100%" height="180px">
        <div class="site">
            @if ($item->sourcetype == 'douyu')
                斗鱼
            @elseif($item->sourcetype == 'zhanqi')
                战旗
            @elseif($item->sourcetype == 'huya')
                虎牙
            @elseif($item->sourcetype == 'plu')
                龙珠
            @elseif($item->sourcetype == 'huomao')
                火猫
            @else
                其它
            @endif
        </div>
        <div class="caption mes">
            <div class="mes-title">
                <h1 class="text-left">{{$item->title}}</h1>
            </div>
            <div class="more-mes">
                <div class="viewers">
                    <div class="v-icon">
                        <img src="{{url('/images/peo.png')}}">
                    </div>
                    <div class="v-num">
                        @if ($item->viewers < 10000)
                            {{$item->viewers}}
                        @else
                            {{number_format($item->viewers / 10000, 1)}}万
                        @endif
                    </div>
                </div>
                <div class="anchor">
                    <div class="a-icon">
                        <img src="{{url('/images/anchor.png')}}">
                    </div>
                    <div class="a-name">
                        {{$item->anchor}}
                    </div>
                </div>
                <div class="cate-type">
                    <div class="cate">
                        <em>{{substr($item->category, 0, 12)}}</em>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
@endforeach
