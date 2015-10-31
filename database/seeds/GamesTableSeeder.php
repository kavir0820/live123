<?php

use Illuminate\Database\Seeder;
use App\Games;

class GamesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('games')->delete();

        Games::create([
            'name'   => '英雄联盟',
            'img'    => 'http://staticlive.douyutv.com/upload/game_cate/c543faae97189c529c37b7741906d5a1.jpg',
            'img_width' => 258,
            'img_height' => 359,
            'rank'   => 10000
        ]);

        Games::create([
            'name'   => '炉石传说',
            'img'    => 'http://staticlive.douyutv.com/upload/game_cate/ff869b8da8231a3f2e8136f6d46e052b.jpg',
            'img_width' => 258,
            'img_height' => 359,
            'rank'   => 9000
        ]);

        for ($i=0; $i<40; $i++) {
            Games::create([
                'name'   => 'DOTA2',
                'img'    => 'http://staticlive.douyutv.com/upload/game_cate/ff869b8da8231a3f2e8136f6d46e052b.jpg',
                'img_width' => 258,
                'img_height' => 359,
                'rank'   => 8000
            ]);
        }
    }
}
