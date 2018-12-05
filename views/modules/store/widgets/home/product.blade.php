<div class="gdlr-core-pbf-wrapper brand-products" style="padding: 30px 0 0">
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
            <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first" data-skin="Dark">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 100px 40px 0px 40px;" data-sync-height="height-port">
                    <div class="gdlr-core-pbf-background-wrap">
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{ Theme::url('images/upload/port-desc-bg-1.jpg') }});background-size: cover;background-position: center;" data-parallax-speed="0.2"></div>
                    </div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content" style="max-width: 300px;">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 15px;">
                                <div class="gdlr-core-title-item-title-wrap ">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 24px;font-weight: 500;letter-spacing: 0px;text-transform: none;color: #f8c12c;">{{ trans('themes::store.product.titles.brand products') }}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-divider-item-normal" style="padding-bottom: 40px;">
                                <div class="gdlr-core-divider-container gdlr-core-left-align" style="max-width: 93px;">
                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #f8c12c;border-bottom-width: 2px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align hide-tablet" style="padding-bottom: 10px;">
                                <div class="gdlr-core-text-box-item-content" style="font-size: 16px;">
                                    <p>{{ trans('themes::store.product.titles.brand products info') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                <div class="gdlr-core-text-box-item-content">
                                    <p><a href="{{ LaravelLocalization::getLocalizedURL(locale(), route('store.index')) }}">{{ trans('themes::theme.buttons.details') }} <i class="fa fa-long-arrow-right" style="font-size: 16px;color: #fff;margin-left: 10px;"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-column gdlr-core-column-45" data-skin="Portfolio Homepage">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " data-sync-height="height-port">
                    <div class="gdlr-core-pbf-background-wrap">
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{ Theme::url('images/upload/port-bg.jpg') }});background-size: cover;background-position: center;" data-parallax-speed="0"></div>
                    </div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-portfolio-item gdlr-core-item-pdb clearfix  gdlr-core-portfolio-item-style-grid-no-space gdlr-core-item-pdlr" style="padding-bottom: 10px;">
                                <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type="carousel" data-column="4" data-nav="navigation" data-nav-parent="gdlr-core-portfolio-item" data-disable-autoslide="1">
                                    <ul class="slides">
                                        @foreach($products as $product)
                                            @if($image = $product->present()->firstImage(null,380,'resize',50))
                                                <li>
                                                    <div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-normal">
                                                        <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-title-icon">
                                                            <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover">
                                                                <img style="padding: 10px;" src="{{ $image }}" alt="{{ $product->title }}">
                                                                <span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js"> <span class="gdlr-core-image-overlay-content"><span class="gdlr-core-portfolio-title gdlr-core-title-font"><a href="{{ $product->url }}">{{ $product->title }}</a></span><span class="gdlr-core-portfolio-icon-wrap"> <a class="gdlr-core-ilightbox gdlr-core-js " href="{{ $product->present()->firstImage(800,null,'resize',50) }}" data-ilightbox-group="gdlr-core-img-group-{{ $product->id }}"><i class="gdlr-core-portfolio-icon icon_zoom-in_alt"></i></a></span></span> </span> </div>
                                                        </div>
                                                        <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                            <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 18px;font-weight: 600;letter-spacing: 0px;text-transform: none;"><a href="{{ $product->url }}">{{ $product->title }}</a></h3>
                                                            <span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font gdlr-core-skin-caption"><a href="{{ $product->brand->url ?? null }}" rel="tag">{{ $product->brand->title ?? null }}</a> <span class="gdlr-core-sep">/</span> <a href="{{ $product->present()->category_url }}" rel="tag">{{ $product->present()->category_title }}</a></span> </div>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>