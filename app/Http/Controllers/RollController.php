<?php

namespace App\Http\Controllers;

use App\Models\roll;
use Illuminate\Http\Request;

class RollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_roles');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result= $this->validate($request, [
            'rolls'=>'required',]);

        $res=new roll();
        $res->rolls=$request->input('rolls');
        $res->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\roll  $roll
     * @return \Illuminate\Http\Response
     */
    public function show(roll $roll)
    {
        return view('show_roles')->with('rowArr',roll::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\roll  $roll
     * @return \Illuminate\Http\Response
     */
    public function edit(roll $roll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\roll  $roll
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, roll $roll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\roll  $roll
     * @return \Illuminate\Http\Response
     */
    public function destroy(roll $roll)
    {
        //
    }
}
