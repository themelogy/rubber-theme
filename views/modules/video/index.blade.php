@extends('layouts.master')

@section('breadcrumbs')
    @component('partials.title', ['breadcrumb'=>'media.index'])
        {{ trans('themes::media.meta.title') }}
    @endcomponent
@endsection

@section('content')
    <div class="realfactory-page-wrapper" id="realfactory-page-wrapper">
        <div class="gdlr-core-page-builder-body">
            <div class="gdlr-core-pbf-wrapper " style="padding: 90px 0px 20px 0px;">
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-modern gdlr-core-personnel-style-modern gdlr-core-with-divider ">
                                @foreach($medias as $media)
                                <div class="gdlr-core-personnel-list-column  gdlr-core-column-20 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                    <div class="gdlr-core-personnel-list clearfix">
                                        <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                            <a href="{{ $media->url }}"><img src="{{ $media->present()->firstImage(600,400,'fit',80) }}" alt="{{ $media->title }}"></a>
                                        </div>
                                        <div class="gdlr-core-personnel-list-content-wrap">
                                            <div class="gdlr-core-personnel-list-title gdlr-core-title-font"><a href="{{ $media->url }}">{{ $media->title }}</a></div>
                                            <div class="gdlr-core-personnel-list-position gdlr-core-info-font">{{ $media->category->title }}</div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        {!! $medias->render('partials.pagination') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
