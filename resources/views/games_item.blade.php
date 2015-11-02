<div class="col-lg-2 col-md-2">
    <a href="/games?name={{$game->name}}" target="_blank" class="thumbnail game">
        <img class="img-responsive game-img lazy" src="{{url('/images/default_game.jpg')}}" data-original="{{$game->img}}">
        <div class="caption game-mes">
            <h4 class="text-center game-name">{{$game->name}}</h4>
        </div>
    </a>
</div>
