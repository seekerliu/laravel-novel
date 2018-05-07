@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="l-grid col-md-12">
                <div class="panel panel-default">
                    {{--<div class="panel-heading">--}}
                        {{--{{ $item->title }}--}}
                    {{--</div>--}}

                    <div class="panel-body view-page">
                        <div class="content">
                            <h1 class="chapter-number">{{$item->title}}</h1>
                            <div class="contents-comic">
                                <video
                                        id="my-player"
                                        class="video-js"
                                        controls
                                        preload="auto"
                                        data-setup='{}'>
                                    <source src="/files/{{$item->video}}" type="video/mp4"/>
                                    <p class="vjs-no-js">
                                        To view this video please enable JavaScript, and consider upgrading to a
                                        web browser that
                                        <a href="http://videojs.com/html5-video-support/" target="_blank">
                                            supports HTML5 video
                                        </a>
                                    </p>
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection