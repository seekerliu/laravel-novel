@extends('layouts.app')

@section('content')
    <div class="container videos">
        <div class="row">
            <div class="l-grid col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        全部视频
                    </div>

                    <div class="panel-body l-category box">
                        @foreach($items as $item)
                        <div class="element">
                            <a href="{{route('videos.show', $item->_id)}}" class="crop" title="{{$item->title}}">
                                <img class="thumb" src="/thumbs/{{$item->thumb}}" border="0" alt="{{$item->title}}">
                            </a>
                            <div class="content">
                                <a class="e-title" href="{{route('videos.show', $item->id)}}" title="{{$item->title}}">{{$item->title}}</a>
                                {{--<span class="e-view">热度: </span>--}}
                            </div>
                        </div>
                        @endforeach

                        <div class="pages">
                        {{$items->links()}}
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
