<div class="table-responsive">
    <table class="table table-striped table-hover products">
        @foreach($products as $product)
            @if($loop->first)
            <thead>
            <tr>
                <th>{{ trans('themes::store.products.titles.image') }}</th>
                <th>{{ trans('themes::store.products.titles.name') }}</th>
                <th>{{ trans('themes::store.products.titles.gyp') }}</th>
                <th>{{ trans('themes::store.products.titles.original no') }}</th>
                <th>{{ trans('themes::store.products.titles.brand') }}</th>
                <th>{{ trans('themes::store.products.settings.size') }}</th>
            </tr>
            </thead>
            <tbody>
            @endif
            <tr>
                @if($image = $product->present()->firstImage(null,50,'resize',80))
                    <td><a href="{{ $product->url }}"><img src="{{ $image }}" alt="{{ $product->title }}" /></a></td>
                @else
                    <td><a href="{{ $product->url }}"><img src="https://via.placeholder.com/50x50.png?text=X" alt="{{ $product->title }}" /></a></td>
                @endif
                <td><a href="{{ $product->url }}">{{ $product->title }}</a></td>
                <td><a href="{{ $product->url }}">{{ $product->sku }}</a></td>
                <td><a href="{{ $product->url }}">{{ $product->model }}</a></td>
                <td><a href="{{ $product->url }}">{{ $product->brand->title ?? '' }}</a></td>
                <td><a href="{{ $product->url }}">{{ $product->settings->size ?? '' }}</a></td>
            </tr>
            @if($loop->first)
            </tbody>
            @endif
        @endforeach
    </table>
</div>

@push('css-inline')
<style>
    .products th {
        text-align: center !important;
    }
    .products td {
        vertical-align: middle !important;
    }
</style>
@endpush
