<div class="gdlr-core-pbf-sidebar-left gdlr-core-column-extend-left  realfactory-sidebar-area gdlr-core-column-15 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 60px 30px 30px 0px;">
    <div class="gdlr-core-pbf-background-wrap" style="background-color: #f9f9f9 ;"></div>
    <div class="gdlr-core-sidebar-item">
        @include('store::widgets.sidebar.search')
        @if(Request::route()->getName()=='store.index')
            @storeCategory(20, 'sidebar.category')
        @else
            @isset($category)
                @storeSubCategory($category,'sidebar.category')
            @endisset
        @endif
        @storeBrands(20, 'sidebar.brands')
        @if(isset($product))
        @storeRelatedProducts($product, 6, 'sidebar.product')
        @endif
    </div>
</div>