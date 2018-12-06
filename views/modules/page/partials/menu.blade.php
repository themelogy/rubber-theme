<div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
    <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-45 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-right" style="padding: 60px 0px 30px 30px;">
        <div class="gdlr-core-pbf-sidebar-content-inner">

            @include('page::partials.image')
            {!! $slot ?? '' !!}

        </div>
    </div>
    <div class="gdlr-core-pbf-sidebar-left gdlr-core-column-extend-left  realfactory-sidebar-area gdlr-core-column-15 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 60px 30px 30px 0px;">
        <div class="gdlr-core-pbf-background-wrap" style="background-color: #f9f9f9 ;"></div>
        <div class="gdlr-core-sidebar-item">

            @if(isset($page->parent))
                @pageChildren($page->parent, 'sidebar.menu')
            @elseif(isset($page->children))
                @pageChildren($page, 'sidebar.menu')
            @endif

            @includeWhen($page,'page::partials.doc')
            @includeWhen($page && ($page->settings->embed_video ?? false), 'page::partials.video')

        </div>
    </div>
</div>