<div id="recent-comments-3" class="widget widget_recent_comments realfactory-widget">
    <h3 class="realfactory-widget-title">{{ trans('themes::news.recent posts') }}</h3>
    <ul id="recentcomments">
        @foreach($posts as $post)
        <li class="recentcomments"><a href="{{ $post->url }}">{{ $post->title }}</a></li>
        @endforeach
        @unset($posts)
    </ul>
</div>