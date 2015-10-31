<?php

namespace App\Http\Controllers;

use Request;
use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\Games;
use DB;
use Illuminate\Support\Facades\Input;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = Input::get('name');

        $start = Input::get('start');
        $start = $start ? $start : 0;
        $offset = Input::get('offset');
        $offset = $offset ? $offset : 32;

        if ($name == null || $name == '' || $name == '全部') {
            $live_num = DB::select('select count(*) as num from live_on where invalid = 0');
            $live_list = DB::select('select * from live_on where invalid = 0 order by viewers DESC limit ?,?', [$start, $offset]);
        } else {
            $live_num = DB::select('select count(*) as num from live_on where invalid = 0 and category like "%'.$name.'"');
            $live_list = DB::select('select * from live_on where category like "%'.$name.'%" and invalid = 0 order by viewers DESC limit ?,?', [$start, $offset]);
        }

        if(Request::ajax()) {
            return view('list_scroll', ['list' => $live_list]);
        }
        return view('games', ['live_num' => $live_num, 'list' => $live_list]);
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
