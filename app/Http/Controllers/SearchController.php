<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Reponse;
use Input;
use SphinxQL;

class SearchController extends Controller
{
    public function index()
    {
        $query = Input::get('query');

        $start = Input::get('start');
        $start = $start ? $start : 0;
        $offset = Input::get('offset');
        $offset = $offset ? $offset : 32;

        $live_list = SphinxQL::query()->select()->from('index_live')->match('*', $query)->where('invalid', 0)->orderBy('viewers', 'desc')->limit($start, $offset)->execute();
        $live_list = json_decode(json_encode($live_list), false);

        if(Request::ajax()) {
            return view('list_scroll', ['list' => $live_list]);
        }
        return view('search', ['list' => $live_list]);
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
