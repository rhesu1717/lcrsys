<?php

namespace App\Http\Controllers;

use App\Models\Marriage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarriageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lcr_no = $request->lcr_no;
        $date = $request->date;
        $dreg = $request->dreg;
        $g_lastname = $request->g_lastname;
        $g_firstname = $request->g_firstname;
        $g_middlename = $request->g_middlename;
        $w_lastname = $request->w_lastname;
        $w_firstname = $request->w_firstname;
        $w_middlename = $request->w_middlename;


        $marriages = Marriage::orderBy('DATEMOD', 'asc')
        ->when($lcr_no, function($query)use($lcr_no){
            $query->where('LCR', $lcr_no);
        })
        ->when($date, function($query)use($date){
            $query->where('DATE', $date);
        })
        ->when($dreg, function($query)use($dreg){
            $query->where('DREG', $dreg);
        })
        ->when($g_lastname, function($query)use($g_lastname){
            $query->where(DB::raw("REPLACE(G_LNAME,'Ã‘','Ñ')"), 'like', '%'.$g_lastname.'%');
        })
        ->when($g_firstname, function($query)use($g_firstname){
            $query->where(DB::raw("REPLACE(G_FNAME,'Ã‘','Ñ')"), 'like', '%'.$g_firstname.'%');
        })
        ->when($g_middlename, function($query)use($g_middlename){
            $query->where(DB::raw("REPLACE(G_MI,'Ã‘','Ñ')"), 'like', '%'.$g_middlename.'%');
        })
        ->when($w_lastname, function($query)use($w_lastname){
            $query->where(DB::raw("REPLACE(W_LNAME,'Ã‘','Ñ')"), 'like', '%'.$w_lastname.'%');
        })
        ->when($w_firstname, function($query)use($w_firstname){
            $query->where(DB::raw("REPLACE(W_FNAME,'Ã‘','Ñ')"), 'like', '%'.$w_firstname.'%');
        })
        ->when($w_middlename, function($query)use($w_middlename){
            $query->where(DB::raw("REPLACE(W_MI,'Ã‘','Ñ')"), 'like', '%'.$w_middlename.'%');
        })
        ->simplePaginate(10)
        ->withQueryString();

        return view('pages.marriage.index')->with(compact('marriages'));
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
