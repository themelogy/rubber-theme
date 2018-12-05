<div class="gdlr-core-pbf-wrapper product" style="padding: 80px 0 0;">
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 55px;">
                    <div class="gdlr-core-title-item-title-wrap  gdlr-core-js-2 gdlr-core-with-divider">
                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 36px;font-weight: 300;letter-spacing: 0px;text-transform: none;margin-right: 30px;">{{ trans('themes::store.category.titles.product categories') }}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                        <div class="gdlr-core-title-item-divider gdlr-core-right gdlr-core-skin-divider"></div>
                    </div>
                </div>
            </div>
            @foreach($categories as $category)
            @if($image = $category->present()->firstImage(360,200,'fit',50))
            <div class="gdlr-core-pbf-column gdlr-core-column-20{{ $loop->first == 1 ? ' gdlr-core-column-first' : '' }}">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 35px;min-height: 200px;max-height: 200px; margin-bottom: 10px;">
                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-round" style="border-width: 0px;"> <a href="{{ $category->url }}" target="_self"><img src="{{ $image }}" alt="{{ $category->title }}" class="img-thumbnail img-rounded"><span class="gdlr-core-image-overlay " style="background: rgba(236, 182, 34, 0.6) ;"><i class="gdlr-core-image-overlay-icon fa fa-link gdlr-core-size-28" style="color: #ffffff;"></i></span></a> </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                <div class="gdlr-core-title-item-title-wrap ">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px;font-weight: 500;letter-spacing: 0px;text-transform: none;"> <a href="{{ $category->url }}" target="_self">{{ $category->title }}</a><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 10px;">
                                <div class="gdlr-core-text-box-item-content" style="font-size: 16px;">
                                    {!! $category->meta_description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>