@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="l-grid col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ empty($category)? '全部小说' : $category->name}}
                    </div>

                    <div class="panel-body l-category box">
                        <ul class="content">
                            @foreach($items as $novel)
                            <li>
                                <a class="c-title" href="{{route('novels.show', $novel->id)}}" title="{{$novel->name}}">{{$novel->name}}</a>
                                {{--<a class="tag tag-novel-type" href="http://shu000.com/xuanhuan">#玄幻小说</a>--}}
                                <a class="tag tag-novel-status">#连载中</a>
                                <a href="{{route('authors.show', $novel->author->id)}}" title="{{$novel->author->name}}" class="cate-li-right">{{$novel->author->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                        {{$items->links()}}
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
                                        <a href="{{route('novels.show', $novel->id)}}" class="crop" title="{{$novel->name}}">
                                            <img class="thumb-s" title="{{$novel->name}}" alt="{{$novel->name}}" src="{{$novel->cover}}">
                                        </a>
                                    </div>
                                    <div class="l-right-info">
                                        <a class="r-title" href="{{route('novels.show', $novel->id)}}" title="{{$novel->name}}">{{$novel->name}}</a>
                                        <a href="{{route('authors.show', $novel->author->id)}}" title="{{$novel->author->name}}" class="e-user">{{$novel->author->name}}</a>
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
