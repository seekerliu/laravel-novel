@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="l-grid col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $novel->name }}
                    </div>

                    <div class="panel-body view-page">
                        @component('articles.context')
                            @slot('next', $next)
                            @slot('previous', $previous)
                            @slot('novel', $novel)
                        @endcomponent
                        <div class="content">
                            <h1 class="chapter-number">{{$article->name}}</h1>
                            <div class="contents-comic">{{$article->content}}</div>
                        </div>
                        @component('articles.context')
                            @slot('next', $next)
                            @slot('previous', $previous)
                            @slot('novel', $novel)
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection