<div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 85px 0px 0px 0px;" data-sync-height="height-financial">
    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
        <div class="gdlr-core-pbf-element">
            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 45px;" id="gdlr-core-title-item-id-27983">
                <div class="gdlr-core-title-item-title-wrap  gdlr-core-js-2 gdlr-core-with-link-text">
                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 28px;font-weight: 500;letter-spacing: 0px;text-transform: none;color: #141414;">{{ trans('themes::news.title') }}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                    <a href="{{ route('news.index') }}" target="_self" class="gdlr-core-title-item-link">{{ trans('themes::news.all posts') }}</a></div>
            </div>
        </div>
        <div class="gdlr-core-pbf-element">
            <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-list">
                <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                    @foreach($posts as $post)
                    <div class="gdlr-core-item-list gdlr-core-blog-list gdlr-core-item-pdlr  gdlr-core-blog-list-with-frame">
                        <div class="gdlr-core-blog-list-frame gdlr-core-skin-e-background">
                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class="gdlr-core-blog-info-sep">/</span><a href="{{ $post->url }}">{{ $post->created_at->formatLocalized('%d %B %Y') }}</a></span> </div>
                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title"><a href="{{ $post->url }}">{{ $post->title }}</a></h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>