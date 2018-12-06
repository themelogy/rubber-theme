@php
    $list = collect();
    $list->put('showContent', $page->settings->show_content ?? true);
    $list->put('gridSize', $page->settings->list_grid ?? 3);
    $list->put('perPage', $page->settings->list_per_page ?? 6);
    $list->put('chunkSize', ceil(12 / $list->get('gridSize')));
    $list->put('columnSize', is_float(12/$list->get('gridSize')) ? $list->get('gridSize') : $list->get('gridSize'));
    $list->put('hasColumn', (int)ceil(12 % $list->get('gridSize')));
    $list->put('listPage', $page->settings->list_page ?? false);

    $childs = $page->children()->orderBy('position')->paginate($list->get('perPage'));

    function colSize($colSize, $colDiv, $loop) {
        if($loop->first) {
            return $colSize;
        } elseif ($loop->last && $colDiv) {
            return $colDiv;
        } else {
            return $colSize;
        }
    }
@endphp

<div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
    <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-45 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-right" style="padding: 60px 0px 30px 30px;">
        <div class="gdlr-core-pbf-sidebar-content-inner">

            @if($list->get('showContent'))
                <div class="row">
                    <div class="col-md-12">
                        @include('page::partials.image')
                    </div>
                </div>
            @endif

            @if($list->get('listPage'))
                @php
                    $width   = $page->settings->image_width ?? 400;
                    $height  = $page->settings->image_height ?? null;
                    $mode    = $page->settings->image_mode ?? 'resize';
                    $quality = $page->settings->image_quality ?? 80;
                    $hasImg  = $page->settings->show_image ?? false;
                @endphp
                @if($childs->count()>0)
                    @foreach($childs->chunk($list->get('chunkSize')) as $chunks)
                        <div class="row">
                            @foreach($chunks as $child)
                                <div class="col-md-{{ colSize($list->get('columnSize'), $list->get('hasColumn'), $loop) }}">
                                    <div class="thumbnail">
                                        <a href="{{ $child->url }}">
                                            @if(($image = $child->present()->firstImage($width,$height,$mode,$quality)) && $hasImg)
                                                <img src="{{ $image }}" alt="{{ $child->title }}" />
                                            @endif
                                            <div class="caption">
                                                <h5>{{ $child->title }}</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                    {!! $childs->links() !!}
                @endif
            @endif

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

            @includeWhen($page && ($page->settings->show_doc ?? false),'page::partials.doc')
            @includeWhen($page && ($page->settings->video ?? false), 'page::partials.video')

        </div>
    </div>
</div>
