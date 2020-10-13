@foreach(LaravelLocalization::getSupportedLocales() as $locale => $supportedLocale)
    @php
        switch (Request::route()->getName()) {
            case 'page' && isset($page):
            $url = $page->present()->url($locale);
            break;
            case 'homepage' && isset($page):
            $url = $page->present()->url($locale);
            break;
            case 'news.slug' && isset($post):
            case 'blog.slug' && isset($post):
            $url = $post->present()->url($locale);
            break;
            case 'news.category' && isset($category):
            case 'blog.category' && isset($category):
            case 'store.category.slug' && isset($category):
            $url = $category->present()->url($locale);
            break;
            case 'store.product.slug' && isset($product):
            $url = $product->present()->url($locale);
            break;
            case 'employee.view' && isset($employee):
            $url = $employee->present()->url($locale);
            break;
            default:
            $url = LaravelLocalization::getLocalizedURL($locale, route(Request::route()->getName()));
            break;
        }
        $localizedUrl = $url;
      //dd(Request::route()->getName());
    @endphp

    @if($locale != LaravelLocalization::getCurrentLocale())
        <span class="gdlr-core-head">
            <span class="flag-icon flag-icon-{{ $locale == "en" ? "gb" : $locale }}"></span>&nbsp;
            <a href="{{ $localizedUrl }}">{!! $supportedLocale['native'] !!}</a>
        </span>
    @endif

@endforeach
