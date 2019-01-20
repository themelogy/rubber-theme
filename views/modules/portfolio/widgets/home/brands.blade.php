<div class="gdlr-core-pbf-wrapper clients" style="padding: 45px 0 15px 0;">
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-grid gdlr-core-item-pdlr ">
                    <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 brands" data-type="carousel" data-column="5"  data-nav-parent="gdlr-core-blog-item">
                        <ul class="slides">
                            @foreach($brands as $brand)
                                <li class="gdlr-core-item-mglr">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image"> <a href="{{ $brand->website }}" target="_self"><img src="{{ $brand->present()->firstImage(null,240,'resize',50) }}" alt="{{ $brand->title }}"></a> </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="brands"></div>

@push('js-inline')
    <script>
        jQuery(window).load(function () {
            var fBrands = jQuery('.brands');
            var fItems = fBrands.find('ul.slides li').length;
            var fColumn = fBrands.data('column');
            if(fItems <= fColumn && fBrands.width() > 768) {
                setTimeout(function(){
                    fBrands.find('.flex-direction-nav').remove();
                },500);
            }
        });
    </script>
@endpush