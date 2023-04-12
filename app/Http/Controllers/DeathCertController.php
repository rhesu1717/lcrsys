<?php

namespace App\Http\Controllers;

use App\Models\Death;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeathCertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lastname = $request->lastname;
        $firstname = $request->firstname;
        $middlename = $request->middlename;

        $lcr_no = $request->lcr_no;

        $datex = $request->datex;
        $dreg = $request->dreg;

        $deaths = Death::orderBy('DATEMOD', 'asc')
        ->when($lastname, function($query)use($lastname){
            $query->where(DB::raw("REPLACE(LAST,'Ã‘','Ñ')"), 'like', '%'.$lastname.'%');
        })
        ->when($firstname, function($query)use($firstname){
            $query->where(DB::raw("REPLACE(FIRST,'Ã‘','Ñ')"), 'like', '%'.$firstname.'%');
        })
        ->when($middlename, function($query)use($middlename){
            $query->where(DB::raw("REPLACE(MI,'Ã‘','Ñ')"), 'like', '%'.$middlename.'%');
        })
        ->when($datex, function($query)use($datex){
            $query->where('DATEX', 'like', '%'.$datex.'%');
        })
        ->when($dreg, function($query)use($dreg){
            $query->where('DREG', 'like', '%'.$dreg.'%');
        })
        ->when($lcr_no, function($query)use($lcr_no){
            $query->where(DB::raw("REPLACE(LCR_NO,'Ã‘','Ñ')"), 'like', '%'.$lcr_no.'%');
        })

        ->simplePaginate(15)
        ->withQueryString();
        return view('pages.death.index')->with(compact('deaths'));
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
