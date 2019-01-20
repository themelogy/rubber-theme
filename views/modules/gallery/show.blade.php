@extends('layouts.master')

@section('breadcrumbs')
    @component('partials.title', ['breadcrumb'=>'gallery.show'])
        {{ $album->title }}
    @endcomponent
@endsection

@section('content')

    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-section">
            <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-portfolio-item gdlr-core-item-pdb clearfix  gdlr-core-portfolio-item-style-grid" style="padding-bottom: 10px;">
                        <div class="gdlr-core-portfolio-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                            @foreach($album->files as $file)
                                <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-20">
                                    <div class="gdlr-core-portfolio-grid  gdlr-core-center-align gdlr-core-style-normal">
                                        <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-margin-icon">
                                            <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover">
                                                <a class="gdlr-core-ilightbox gdlr-core-js " href="{{ \Imagy::getImage($file->filename, 'albumImage', ['width' => null, 'height' => 600, 'mode' => 'resize', 'quality' => 80]) }}" data-ilightbox-group="gdlr-core-img-group-1" data-caption="{{ $album->title }}">
                                                    <img src="{{ \Imagy::getImage($file->filename, 'albumImage', ['width' => 600, 'height' => 400, 'mode' => 'fit', 'quality' => 80]) }}" alt="" width="800" height="570">
                                                    <span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js gdlr-core-with-margin">
                                                            <span class="gdlr-core-image-overlay-content">
                                                                <span class="gdlr-core-portfolio-icon-wrap"><i class="gdlr-core-portfolio-icon icon_zoom-in_alt"></i>
                                                                </span>
                                                            </span>
                                                        </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
