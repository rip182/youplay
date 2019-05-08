@extends('layouts.wrapper')
@section('content')
    <div id="all-output" class="col-md-10 upload">
        	<div id="upload">
                <div class="row">
                    <!-- upload -->
                    <div class="col-md-8">
						<h1 class="page-title"><span>Upload</span> Video</h1>
						<form action="/video/upload/file" method="post" enctype="multipart/form-data">
                         @csrf
                        	<div class="row">
                            	<div class="col-md-6">
                                	<label>Post Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Post Title">
                                </div>
                            	<div class="col-md-6">
                                	<label>Video upload</label>
                                    <input id="upload_file" name="video" type="file" class="file">
                                </div>
                            	<div class="col-md-12">
                                	<label>Body</label>
                                    <textarea class="form-control" name="body" rows="4"  placeholder="Discrption"></textarea>
                                </div>

                            	{{-- <div class="col-md-6">
                                	<label>Post Featured Image</label>
                                    <input id="featured_image" type="file" class="file">
                                </div> --}}
                            	<div class="col-md-6">
                                    <button type="submit" id="contact_submit" class="btn btn-dm">Save your post</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- // col-md-8 -->

                    {{-- <div class="col-md-4">
                    	<a href="#"><img src="demo_img/upload-adv.png" alt=""></a>
                    </div><!-- // col-md-8 --> --}}
                    <!-- // upload -->
                </div><!-- // row -->
            </div><!-- // upload -->
		</div>
      </div>
@endsection