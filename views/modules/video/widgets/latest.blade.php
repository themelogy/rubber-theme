<div class="gdlr-core-pbf-wrapper " data-skin="White" style="border-top: 1px solid #ebebeb;">
    <div class="gdlr-core-pbf-background-wrap"></div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px;">
                    <div class="gdlr-core-title-item-title-wrap ">
                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 33px;font-weight: 700;letter-spacing: 2px;"><a href="{{ route('video.media.index') }}">{{ trans('themes::media.meta.title') }}</a><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
                </div>
            </div>
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-divider-item-small-center" style="padding-bottom: 80px;">
                    <div class="gdlr-core-divider-line gdlr-core-skin-divider">
                        <div class="gdlr-core-divider-line-bold  gdlr-core-skin-divider"></div>
                    </div>
                </div>
            </div>
            @foreach($medias as $media)
                <div class="gdlr-core-pbf-column gdlr-core-column-20">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 5px 5px 5px 5px;">
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 20px;">
                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;">
                                        <a class="gdlr-core-js " href="{{ $media->url }}"><img class="img-thumbnail" src="{{ $media->present()->firstImage(600,400,'fit',80) }}" alt="{{ $media->title }}"><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon fa fa-search gdlr-core-size-22"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 18px;">
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h5 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 17px;font-weight: 700;text-transform: none;">{{ $media->title }} <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
