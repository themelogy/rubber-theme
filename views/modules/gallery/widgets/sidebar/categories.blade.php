<div id="nav_menu-2" class="widget widget_nav_menu realfactory-widget">
    <h3 class="realfactory-widget-title">{{ trans('themes::gallery.sidebar.category') }}</h3>
    <div class="menu-market-sectors-container">
        <ul id="menu-market-sectors" class="menu">
            @foreach($categories as $category)
                <li class="menu-item"><a href="{{ $category->url }}">{{ $category->title }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
