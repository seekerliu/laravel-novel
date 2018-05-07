<div class="chap-select-dropdown">
    @isset($previous)
    <a href="{{route('articles.show', $previous->id)}}" class="btn-blue prev-page">上一章</a>
    @endisset
    <a href="{{route('novels.show', $novel->id)}}" class="btn-blue">目录</a>
    @isset($next)
    <a href="{{route('articles.show', $next->id)}}" class="btn-blue next-page">下一章</a>
    @endisset
</div>
