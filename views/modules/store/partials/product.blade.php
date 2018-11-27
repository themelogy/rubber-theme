@forelse($products as $product)
    <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-20">
        <div class="gdlr-core-portfolio-grid  gdlr-core-center-align gdlr-core-style-normal">
            <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-margin-icon-title-tag">
                <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover">
                    <img src="{{ $product->present()->firstImage(null,180,'resize',80) }}" alt="{{ $product->title }}" />
                    <span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js gdlr-core-with-margin">
                                                <span class="gdlr-core-image-overlay-content">
                                                    <span class="gdlr-core-portfolio-icon-wrap">
                                                        <a class="gdlr-core-ilightbox gdlr-core-js " href="{{ $product->present()->firstImage(800,null,'resize',80) }}" data-ilightbox-group="gdlr-core-img-group-{{ $product->id }}">
                                                            <i class="gdlr-core-portfolio-icon icon_zoom-in_alt"></i>
                                                        </a>
                                                    </span>
                                                    <span class="gdlr-core-portfolio-title gdlr-core-title-font">
                                                        <a href="{{ $product->url }}">{{ $product->title }}</a>
                                                    </span>
                                                    <span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font">
                                                        @isset($product->brand)
                                                            <a href="{{ $product->brand->url }}" rel="tag">{{ $product->brand->title }}</a>
                                                        @endisset
                                                        <span class="gdlr-core-sep">/</span>
                                                        <a href="{{ $product->present()->category_url }}" rel="tag">
                                                            {{ $product->present()->category_title }}
                                                        </a>
                                                    </span>
                                                </span>
                                             </span>
                </div>
            </div>
            <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 18px;font-weight: 400;letter-spacing: 0px;text-transform: none;">
                    <a href="{{ $product->url }}">{{ $product->title }}</a>
                </h3>
            </div>
        </div>
    </div>
@empty
    @component('partials.components.alert-box', ['alert'=>'warning'])
        @slot('title') {{ trans('themes::store.messages.products not found') }} @endslot
    @endcomponent
@endforelse
