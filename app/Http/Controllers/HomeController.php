<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $start = 0;
        $offset = 8;

        $live_num = DB::select('select live_nums as num from live_nums where live_name = "all"');

        $live_list = DB::select('select * from all_live_first_n where invalid = 0 order by viewers DESC limit ?,?', [$start, $offset]);

        $games_num = DB::select('select count(*) as num from games_on where invalid = 0');

        $games_list = DB::select('select * from games_on limit 0, 12');

        $viewers_num = DB::select('select live_viewers as num from live_viewers where live_name = "all"');

        $girls_live_num = DB::select('select live_nums as num from live_nums where live_name = "girls"');

        $girls_live_list = DB::select('select * from girls_live_first_n where category = ? and invalid = 0 order by viewers desc limit ?,?', ['美女', $start, $offset]);

        $lol_live_num = DB::select('select live_nums as num from live_nums where live_name = "lol"');

        $lol_live_list = DB::select('select * from lol_live_first_n where category = ? and invalid = 0 order by viewers desc limit ?,?', ['英雄联盟', $start, $offset]);

        return view('home', ['live_num' => $live_num, 'list' => $live_list, 'games_num' => $games_num,
        'games' => $games_list, 'viewers_num' => $viewers_num, 'girls_live_num' => $girls_live_num,
        'girls_live_list' => $girls_live_list, 'lol_live_num' => $lol_live_num, 'lol_live_list' => $lol_live_list]);

        // return view('test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
