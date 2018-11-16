@if($tags->count()>0)
<div id="tag_cloud-2" class="widget widget_tag_cloud realfactory-widget">
    <h3 class="realfactory-widget-title">{{ trans('themes::news.tags') }}</h3>
    <div class="tagcloud">
        @foreach($tags as $tag)
        <a href="{{ LaravelLocalization::getLocalizedURL(locale(), route('news.tag', $tag->slug)) }}" class="tag-cloud-link tag-link-7 tag-link-position-1" style="font-size: 8pt;" aria-label="{{ $tag->name }}">{{ $tag->name }}</a>
        @endforeach
    </div>
</div>
@endif