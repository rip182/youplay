@extends('layouts.wrapper')

@section('content')
 <div id="all-output" class="col-md-10 upload">
        	<div id="upload">
                <div class="row">
        <video controls preload="auto">
        <source src="{!! URL::asset('/storage/videos/'.$videos->video)!!}" type="video/mp4" >
        Your browser does not support the video tag. 
        </video>
        
                </div><!-- // row -->
            </div><!-- // upload -->
    
</div>
@endsection