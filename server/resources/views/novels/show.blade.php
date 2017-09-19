@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="l-grid col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $novel->name }}
                    </div>

                    <div class="panel-body">
                        <div class="detail box">
                            <div class="content">
                                <div class="detail-thumb">
                                    <img src="{{$novel->cover}}" border="0" title="{{$novel->name}}" alt="{{$novel->name}}">
                                </div>
                                <div class="detail-story">
                                    <div class="d-s-col">
                                        <p>作者: <a href="{{route('authors.show', $novel->author->id)}}" title="{{$novel->author->name}}">{{$novel->author->name}}</a></p>
                                        <p>分类: <a href="{{route('novels.index', ['category'=>$novel->category->name])}}" title="{{$novel->category->alias}}">{{$novel->category->name}}</a>
                                        </p>
                                        <p>热度: {{$novel->hot}}</p>
                                    </div>
                                    <div class="d-s-col d-s-col-noright">
                                        <p>最新章节: <a id="readNew" href="#" title="第六百二十二章 兄弟重逢">第六百二十二章 兄弟重逢</a></p>
                                        <p>更新时间: 2017-09-19 23:33:19</p>
                                        <p>上次看到: <a id="readLast" href="#" title="第六百二十二章 兄弟重逢">第六百二十二章 兄弟重逢</a></p>
                                    </div>
                                    <div class="clr"></div>
                                    <a id="readStart" href="http://shu000.com/books/10838/chapters/41138104" rel="nofollow" class="btn-big" title="第一章 沙漠中的彼岸花">开始阅读</a>
                                </div>
                                <div class="clr"></div>
                                <div class="desc-story" style="padding-top:10px;">
                                    <strong>简介:</strong>
                                    {{$novel->description}}
                                </div>
                            </div>

                            <h2 class="title mt10">章节列表 <a style="float: right;" href="javascript:;">倒序</a>:</h2>
                            <div class="box search-chap">
                                <div class="content">
                                    <div class="list-chap-wrap">
                                        <div class="list-chap" id="_pchapter">
                                            <ul>
                                                <li data-id="41138104"><p><a title="第一章 沙漠中的彼岸花" href="http://shu000.com/books/10838/chapters/41138104">第一章 沙漠中的彼岸花</a></p></li>
                                            </ul>
                                            <div class="clr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection