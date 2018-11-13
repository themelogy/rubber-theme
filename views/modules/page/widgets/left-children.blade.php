<div id="nav_menu-2" class="widget widget_nav_menu realfactory-widget">
    <h3 class="realfactory-widget-title">{{ $page->title }}</h3>
    <div class="menu-market-sectors-container">
        <ul id="menu-market-sectors" class="menu">
            @foreach($children as $child)
            <li class="menu-item"><a href="{{ $child->url }}">{{ $child->title }}</a></li>
            @endforeach
        </ul>
    </div>
</div>