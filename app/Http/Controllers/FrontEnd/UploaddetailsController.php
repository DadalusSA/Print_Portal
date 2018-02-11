<?php

namespace Dadavel\Http\Controllers\FrontEnd;

use Dadavel\uploaddetail;
use Illuminate\Http\Request;
use Session;
use Storage;
use Response;
use Dadavel\Http\Controllers\Controller;
// use Symfony\Component\Finder\Finder;


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
        $getnames = Storage::directories('uploadedfile/' . Session::get('usertoken') . Session::get('usertimefile') . '/');
        $getfilenames = Storage::allfiles('uploadedfile/' . Session::get('usertoken') . Session::get('usertimefile') . '/');
        $count = count($getnames);
       // $content = Storage::get($getfilenames[0]);
       // $finder = new Finder();
       //$get = $finder->files()->name(storage_path('app/uploadedfile/' . Session::get('usertoken') . Session::get('usertimefile') . '/1/.pdf$/'));
        //dd($content);

        return view('uploaddetail.create', ['countfile' => $count , 'getnames' => $getnames, 'getfilenames' => $getfilenames]);
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

        // $ext = $file->guessClientExtension();

         $name = $file->getClientOriginalName();

        //$time = time();

       // $lala = Storage::directories('uploadedfile/' . Session::get('usertoken') . Session::get('usertimefile') . '/');

       // $count = count($lala);

        $countfile = Session::get('countuploadfile');

        $file->storeAs('uploadedfile/' . Session::get('usertoken') . Session::get('usertimefile') . "/" . $countfile ,"$name");

        ++$countfile;

        session()->put('countuploadfile', $countfile);

        return back();



        // if(Storage::exists($lala))
        // {
        //     dd($lala);
        // $file->storeAs('uploadedfile/' . Session::get('usertoken') . Session::get('usertimefile') . "/" . $count ,"$name");

        // }
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

    public function download($link, $folder, $filename)
    {
        return response()->file(storage_path('app/uploadedfile/' . $link ."/". $folder ."/" . $filename), [], 'inline');

    //     return Response::make(storage_path('app/uploadedfile/' . $link ."/". $folder ."/" . $filename), 200, [
    //     'Content-Type' => 'application/msword',
    //     'Content-Disposition' => 'inline; filename="' . $filename . '"'
    // ]);
    }
}
