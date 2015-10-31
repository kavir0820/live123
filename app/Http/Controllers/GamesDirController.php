<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GamesDirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $live_num = DB::select('select count(*) as num from live_on where invalid = 0');
        $viewers_num = DB::select('select sum(viewers) as num from live_on where invalid = 0');
        $games_num = DB::select('select count(*) as num from games_on where invalid = 0');
        $games_list = DB::select('select * from games_on');

        return view('games-dir', ['games_num' => $games_num, 'live_num' => $live_num, 'viewers_num' => $viewers_num, 'games_list' => $games_list]);
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
