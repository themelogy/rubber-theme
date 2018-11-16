<div id="text-2" class="widget widget_text realfactory-widget">
    <h3 class="realfactory-widget-title">{{ trans('themes::news.category.title') }}</h3>
    <ul style="margin-left:0; padding-left: 0; list-style-type: none;">
        @foreach($categories as $category)
            <li style="margin-left: 0; padding-left: 0;"><span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon fa fa-gear" style="color: #4c4c4c;font-size: 16px;width: 16px;"></i></span>
                <a href="{{ $category->url }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
</div>