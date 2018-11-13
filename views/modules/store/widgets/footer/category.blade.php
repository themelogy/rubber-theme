<h3 class="realfactory-widget-title">{{ trans('themes::store.category.titles.product categories') }}</h3>
<div class="menu-market-sectors-container">
    <ul id="menu-market-sectors" class="menu">
        @foreach($categories as $category)
        <li class="menu-item" data-size="60"><a href="{{ $category->url }}">{{ $category->title }}</a></li>
        @endforeach
    </ul>
</div>