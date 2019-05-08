<?php

namespace App\Http\Controllers;

use App\video;
use Illuminate\Http\Request;

class VideoController extends Controller
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
        return view('uploadPage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // in case you forgot the key to create a data to database is "model::create" method
        // make a validation but not on this class create another or make middleware and make validation there

        // handle the upload
        if($request->hasFile('video'))
        {
            // get filename with Extention
            $filenameWithExt = $request->file('video')->getClientOriginalName();
            // just get the file name
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // just get the file extention
            $extension=$request->file('video')->getClientOriginalExtension();
            // filename to Store
            $filenameToStore = $filename."_".time().".".$extension;
            // Upload the video
            $path = $request->file('video')->storeAs('public/videos',$filenameToStore); 
        }

        video::create([
            'title' => request('title'),
            'body' => request('body'),
            'video' =>$filenameToStore
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(video $video)
    {
        $video= video::all();
        dd($video);
        return view('watch/video')->compact('video');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(video $video)
    {
        //
    }
}
