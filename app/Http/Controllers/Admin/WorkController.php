<?php

namespace App\Http\Controllers\Admin;

use App\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Work::all();
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
        $work = Work::create($request->all());
        return $work;

//        $data = $request->all();
//
//        $ins = [
//            'title' => $data['title'],
//            'price' => $data['price']
//        ];
//
//        return Work::create($ins);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        return Work::findOrFail($work->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
    {

        $work = Work::findOrFail($work->id);
        $work->update($request->except(['id']));

        return $work;
//        $data = $request->all();
//
//        return Work::where('id', $data['id'])->update([
//            'title' => $data['title'],
//            'price' => $data['price']
//        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        $work = Work::findOrFail($work->id);
        $work->delete();
        return '';
       //return Work::where('id', $work->id)->delete();
    }
}
