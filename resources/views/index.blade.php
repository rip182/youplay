@extends('layouts.wrapper')

@section('content')
    <div id="all-output" class="col-md-10">
        	<h1 class="new-video-title"><i class="fa fa-bolt"></i> Trending</h1>
            <div class="row">
                @foreach ( $videos as $video )
                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                        	<div class="hover-efect"></div>
                            <small class="time">10:53</small>
                            <a href="{{ url('watch/video/'.$video->id) }}"><img src="demo_img/v1.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">{{ $video->title }}</a>
                            <a class="channel-name" href="#">Rabie Elkheir<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>{!! $video->created_at->diffForHumans() !!}</span>
                        </div>
                    </div>
                </div>
                
                <!-- // video-item -->
                @endforeach

            </div><!-- // row -->
        	<h1 class="new-video-title"><i class="fa fa-globe"></i> News</h1>
            <div class="row">

                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                        	<div class="hover-efect"></div>
                            <small class="time">10:53</small>
                            <a href="#"><img src="demo_img/v9.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                            <a class="channel-name" href="#">Rabie Elkheir<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
                        </div>
                    </div>
                </div>
                <!-- // video-item -->


                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                        	<div class="hover-efect"></div>
                            <small class="time">10:53</small>
                            <a href="#"><img src="demo_img/v10.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                            <a class="channel-name" href="#">Rabie Elkheir<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
                        </div>
                    </div>
                </div>
                <!-- // video-item -->


                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                        	<div class="hover-efect"></div>
                            <small class="time">10:53</small>
                            <a href="#"><img src="demo_img/v11.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                            <a class="channel-name" href="#">Rabie Elkheir<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
                        </div>
                    </div>
                </div>
                <!-- // video-item -->


                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                        	<div class="hover-efect"></div>
                            <small class="time">10:53</small>
                            <a href="#"><img src="demo_img/v12.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                            <a class="channel-name" href="#">Rabie Elkheir<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
                        </div>
                    </div>
                </div>
                <!-- // video-item -->

            </div><!-- // row -->

            <!-- Loading More Videos -->
            <div id="loading-more">
            	<i class="fa fa-refresh faa-spin animated"></i> <span>Loading more</span>
            </div>
            <!-- // Loading More Videos -->

		</div>
@endsection