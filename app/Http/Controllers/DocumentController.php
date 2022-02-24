<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Document;
use Illuminate\Http\Request;
use App\Traits\UpdateStatusTrait;

class DocumentController extends Controller
{
    use UpdateStatusTrait;
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
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        // dd($document);
        if($document->documentStatus == 2 && auth()->user()->hasRole('head-of-department')){
            return view('document.xlhs', compact('document'));
        }
        if($document->documentStatus == 1 && auth()->user()->hasRole('expert')){
            return view('document.xlhs', compact('document'));
        }
        return view('/home')->with('msg','You dont have permission!!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        // dd(auth()->user()->hasRole('expert'));
        if(auth()->user()->hasRole('expert')){
            $request->validate([
                'expertCmt'     => 'required',
                'coordinate'    => 'required'
            ]);
            $document->expertCmt = $request->input('expertCmt');
            $document->coordinate = $request->input('coordinate');
            $document->expertID = auth()->user()->id;
            $this->UpdateStatus($document,"2");
        }
        if(auth()->user()->hasRole('head-of-department')){
            if($request->input('type')==='pass'){
                // dd($request->input('type'));
            $document->hodID = auth()->user()->id;
                $this->UpdateStatus($document,"3"); 
            }
            else{
                $request->validate([
                    'hodCmt'     => 'required'
                ]);
                $document->hodCmt = $request->input('hodCmt');
                $document->hodID = auth()->user()->id;
                $this->UpdateStatus($document,"2"); 
            }
        }
        return redirect('/home')->with('msg', 'Success!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }
}
