<?php

namespace App\Http\Controllers;

use App\Models\HoSo;
use App\Models\document;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(auth()->user()->hasRole('expert')){
            
            $HoSos = document::where('documentStatus', '1')->get();
        }
        if(auth()->user()->hasRole('head-of-department')){
            $HoSos = document::where('documentStatus', '2')->get();
            
        }
       
        return view('document.dashboard', compact('HoSos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function GetHoSo()
    {
        //
        $HoSos = documents::all();
        return response()
            ->json(['hoso' => $HoSos]);
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
     * @param  \App\Models\HoSo  $hoSo
     * @return \Illuminate\Http\Response
     */
    public function show(HoSo $hoSo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HoSo  $hoSo
     * @return \Illuminate\Http\Response
     */
    public function edit(HoSo $hoSo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HoSo  $hoSo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HoSo $hoSo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HoSo  $hoSo
     * @return \Illuminate\Http\Response
     */
    public function destroy(HoSo $hoSo)
    {
        //
    }
}
