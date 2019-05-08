@extends('layouts.wrapper')

@section('content')
 <div id="all-output" class="col-md-10 upload">
        	<div id="upload">
                <div class="row">

    @foreach ( $videos as $video )
    {{-- {{ dd(file_exists(public_path('/storage/videos/'.$video->video))) }} --}}
        <video controls>
        <source src="{!! URL::asset('/storage/videos/'.$video->video)!!}" type="video/mp4" >
        Your browser does not support the video tag. 
        </video>
    @endforeach
    

            </div><!-- // row -->
        </div><!-- // upload -->
    </div>
</div>
@endsection