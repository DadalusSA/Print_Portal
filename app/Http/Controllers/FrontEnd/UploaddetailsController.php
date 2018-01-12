<?php

namespace Dadavel\Http\Controllers\FrontEnd;

use Dadavel\uploaddetail;
use Illuminate\Http\Request;
use Session;
use Storage;
use Dadavel\Http\Controllers\Controller;

class UploaddetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('uploaddetail.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('uploaddetail.create');
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

         $validatedData = $request->validate([
        'content_file' => 'required|mimes:doc,docx',
        'number_page' => 'required',
    ]);

         $file = request()->file('content_file');

         $ext = $file->guessClientExtension();


        $time = time();

        $lala = Storage::files('uploadedfile/' . Session::get('usertoken') . Session::get('usertimefile') . '/');

        $count = count($lala);

        $countfile = $count + 1;

         $file->storeAs('uploadedfile/' . Session::get('usertoken') . Session::get('usertimefile'),  "$countfile.{$ext}");

         
    }

    /**
     * Display the specified resource.
     *
     * @param  \Dadavel\uploaddetail  $uploaddetail
     * @return \Illuminate\Http\Response
     */
    public function show(uploaddetail $uploaddetail)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Dadavel\uploaddetail  $uploaddetail
     * @return \Illuminate\Http\Response
     */
    public function edit(uploaddetail $uploaddetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Dadavel\uploaddetail  $uploaddetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, uploaddetail $uploaddetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Dadavel\uploaddetail  $uploaddetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(uploaddetail $uploaddetail)
    {
        //
    }
}
