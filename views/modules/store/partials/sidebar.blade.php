<div class="gdlr-core-pbf-sidebar-left gdlr-core-column-extend-left  realfactory-sidebar-area gdlr-core-column-15 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 60px 30px 30px 0px;">
    <div class="gdlr-core-pbf-background-wrap" style="background-color: #f9f9f9 ;"></div>
    <div class="gdlr-core-sidebar-item">
        @storeCategory(20,'left-category')
        @if(isset($product))
        @storeRelatedProducts($product, 6, 'left-product')
        @else
        @storeLatestProduct(6, 'left-product')
        @endif
    </div>
</div>