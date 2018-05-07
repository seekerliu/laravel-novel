@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="l-grid col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">热门推荐</div>

                <div class="panel-body">
                    @foreach($recommended as $novel)
                    <div class="element">
                        <a href="{{route('novels.show', $novel->_id)}}" class="crop" title="{{$novel->name}}">
                            <img class="thumb" src="{{$novel->cover}}" border="0" alt="{{$novel->name}}">
                        </a>
                        <div class="content">
                            <a class="e-title" href="{{route('novels.show', $novel->_id)}}" title="{{$novel->name}}">{{$novel->name}}</a>
                            <span class="e-view">热度: {{$novel->hot}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="l-right col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">排行热榜</div>

                <div class="panel-body">
                    <ul class="content">
                        @foreach($hotRank as $novel)
                        <li>
                            <div class="fll">
                                <a href="{{route('novels.show', $novel->_id)}}" class="crop" title="{{$novel->name}}">
                                    <img class="thumb-s" title="{{$novel->name}}" alt="{{$novel->name}}" src="{{$novel->cover}}">
                                </a>
                            </div>
                            <div class="l-right-info">
                                <a class="r-title" href="{{route('novels.show', $novel->_id)}}" title="{{$novel->name}}">{{$novel->name}}</a>
                                <a href="{{route('authors.show', $novel->author->_id)}}" title="{{$novel->author->name}}" class="e-user">{{$novel->author->name}}</a>
                                <span class="e-view">热度: {{$novel->hot}}</span>
                            </div>
                        </li>
                        @endforeach
                        <li class="l-right-end">
                            <a rel="nofollow" href="#" class="box-more">查看更多</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
