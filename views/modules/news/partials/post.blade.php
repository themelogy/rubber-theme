<div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-pdlr gdlr-core-style-left">
    @if($image = $post->present()->firstImage(920,415,'fit',80))
        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
            <a href="{{ $post->url }}"><img src="{{ $image }}" alt="{{ $post->title }}"></a>
        </div>
    @endif
    <div class="gdlr-core-blog-full-head clearfix">
        <div class="gdlr-core-blog-date-wrapper gdlr-core-skin-divider">
            <div class="gdlr-core-blog-date-day gdlr-core-skin-caption">{{ $post->created_at->format('d') }}</div>
            <div class="gdlr-core-blog-date-month gdlr-core-skin-caption">{{ $post->created_at->formatLocalized('%b') }}</div>
        </div>
        <div class="gdlr-core-blog-full-head-right">
            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                    <span class="gdlr-core-head"><i class="icon_clock_alt"></i></span>
                    <a href="{{ $post->url }}">{{ $post->created_at->formatLocalized('%d %B %Y') }}</a>
                </span>
                <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                <span class="gdlr-core-head"><i class="icon_folder-alt"></i></span>
                <a href="{{ $post->category->url }}" rel="tag">{{ $post->category->name }}</a>
            </span>
            </div>
            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 34px;font-weight: 700;letter-spacing: 0px;">
                <a href="{{ $post->url }}">{{ $post->title }}</a>
            </h3>
        </div>
    </div>
    <div class="gdlr-core-blog-content">
        {!! $post->intro !!}
        <div class="clear"></div>
        <a class="gdlr-core-excerpt-read-more" href="{{ $post->url }}">{{ trans('global.buttons.read more') }}<i class="fa fa-long-arrow-right"></i></a>
    </div>
</div>