<div class="table-responsive">
    <table class="table table-striped table-hover products">
        <thead>
        <tr>
            <th>{{ trans('themes::store.products.titles.image') }}</th>
            <th>{{ trans('themes::store.products.titles.name') }}</th>
            <th>{{ trans('themes::store.products.titles.gyp') }}</th>
            <th>{{ trans('themes::store.products.titles.original no') }}</th>
            <th>{{ trans('themes::store.products.titles.brand') }}</th>
            <th>{{ trans('themes::store.products.titles.details') }}</th>
        </tr>
        </thead>
        <tbody>
        @forelse($products as $product)
            <tr>
                <td><img src="{{ $product->present()->firstImage(null,50,'resize',80) }}" alt="{{ $product->title }}" /></td>
                <td><a href="{{ $product->url }}">{{ $product->title }}</a></td>
                <td>{{ $product->sku }}</td>
                <td>{{ $product->model }}</td>
                <td><a href="{{ $product->brand->url ?? '' }}" rel="tag">{{ $product->brand->title ?? '' }}</a></td>
                <td><a class="btn btn-default btn-xs" href="{{ $product->url }}">{{ trans('themes::theme.buttons.view') }}</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="6">
                    {{ trans('themes::store.messages.products not found') }}
                </td>
            </tr>
        @endforelse
        </tbody>
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