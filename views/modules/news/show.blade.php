@extends('layouts.master')

@section('breadcrumbs')
    @component('partials.title', ['breadcrumb'=>'news.show'])
        {{ $post->title }}
    @endcomponent
@endsection

@section('content')
    <div class="realfactory-content-container realfactory-container">
        <div class=" realfactory-sidebar-wrap clearfix realfactory-line-height-0 realfactory-sidebar-style-right">
            <div class=" realfactory-sidebar-center realfactory-column-40 realfactory-line-height">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-section">
                        <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full" style="padding-bottom: 40px;">
                                    <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
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
                                                {!! $post->content !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('news::partials.sidebar')
        </div>
    </div>
@stop
