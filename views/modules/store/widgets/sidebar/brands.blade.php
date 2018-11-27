<div id="nav_menu-2" class="widget widget_nav_menu realfactory-widget">
    <h3 class="realfactory-widget-title">{{ trans('themes::store.products.titles.brands') }}</h3>
    <div class="menu-market-sectors-container">
        <ul id="menu-market-sectors" class="menu">
            @foreach($brands as $brand)
            <li class="menu-item"><a href="{{ $brand->url }}">{{ $brand->title }}</a></li>
            @endforeach
        </ul>
    </div>
</div>