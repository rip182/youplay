<?php

namespace App\Http\Controllers;

use App\video; 
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use wapmorgan\MediaFile\MediaFile;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos= video::all();
       
          
        return view('index',compact('videos','user'));
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
       
        
        // handle the upload
        if($request->hasFile('video'))
        {
            $filenameWithExt = $request->file('video')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('video')->getClientOriginalExtension();
            $filenameToStore = $filename."_".time().".".$extension;
            $path = $request->file('video')->storeAs('public/videos',$filenameToStore); 
        }
        // get video duration
        try {
            $media = MediaFile::open(public_path('/storage/videos/'.$filenameToStore));
            
            if ($media->getVideo()){
              $video = $media->getVideo();
              // calls to VideoAdapter interface
              $totalTime = intval($video->getLength().PHP_EOL);
 
              $hour = floor($totalTime / 3600);
              $minute =floor(($totalTime / 60) % 60);
              $seconds = $totalTime%60;
              $duration =($hour = 0 ?$hour.':':'').($minute = 0 ? '':$minute.':').$seconds;
            }
          } catch (wapmorgan\MediaFile\Exceptions\FileAccessException $e) {
            // FileAccessException throws when file is not a detected media
          } catch (wapmorgan\MediaFile\Exceptions\ParsingException $e) {
             echo 'File is propably corrupted: '.$e->getMessage().PHP_EOL;
          }
        video::create([
            'title' => request('title'),
            'body' => request('body'),
            'video' =>$filenameToStore,
            'user_id' => auth::id(),
            'duration' => $duration
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
        $videos= video::find($video->id);

        // dd($videos);
        return view('video',compact('videos'));
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
