<div id="nav_menu-3" class="widget widget_nav_menu realfactory-widget">
    <h3 class="realfactory-widget-title">ÜRÜNLER</h3>
    <div class="menu-useful-links-container">
        <ul id="menu-useful-links" class="menu">
            @foreach($products as $product)
            <li class="menu-item" data-size="60"><a href="{{ $product->url }}">{{ $product->title }}</a></li>
            @endforeach
            @unset($products)
        </ul>
    </div>
</div>