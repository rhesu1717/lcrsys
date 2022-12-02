<?php

namespace App\Http\Controllers;

use App\Models\Birth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BirthCertController extends Controller
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

        $mlastname = $request->mlastname;
        $mfirstname = $request->mfirstname;
        $mmiddlename = $request->mmiddlename;

        $birthdate = $request->birthdate;

        $births = Birth::orderBy('DATEMOD', 'asc')
        ->when($lastname, function($query)use($lastname){
            $query->where(DB::raw("REPLACE(LAST,'Ã‘','Ñ')"), 'like', '%'.$lastname.'%');
        })
        ->when($firstname, function($query)use($firstname){
            $query->where(DB::raw("REPLACE(FIRST,'Ã‘','Ñ')"), 'like', '%'.$firstname.'%');
        })
        ->when($middlename, function($query)use($middlename){
            $query->where(DB::raw("REPLACE(MI,'Ã‘','Ñ')"), 'like', '%'.$middlename.'%');
        })
        ->when($birthdate, function($query)use($birthdate){
            $query->where('DATE', 'like', '%'.$birthdate.'%');
        })
        ->when($mlastname, function($query)use($mlastname){
            $query->where(DB::raw("REPLACE(MLAST,'Ã‘','Ñ')"), 'like', '%'.$mlastname.'%');
        })
        ->when($mfirstname, function($query)use($mfirstname){
            $query->where(DB::raw("REPLACE(MFIRST,'Ã‘','Ñ')"), 'like', '%'.$mfirstname.'%');
        })
        ->when($mmiddlename, function($query)use($mmiddlename){
            $query->where(DB::raw("REPLACE(MMI,'Ã‘','Ñ')"), 'like', '%'.$mmiddlename.'%');
        })
        ->simplePaginate(15)
        ->withQueryString();

        return view('pages.birth.index')->with(compact('births'));
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
