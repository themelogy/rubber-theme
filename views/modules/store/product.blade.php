@extends('layouts.master')

@section('breadcrumbs')
    @component('partials.title', ['breadcrumb'=>'store.product'])
        {{ $product->title }}
    @endcomponent
@endsection

@section('content')
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-sidebar-wrapper ">
            <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-45 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-right" style="padding: 60px 0px 30px 30px;">
                    <div class="gdlr-core-pbf-sidebar-content-inner">
                        @php $images = $product->present()->images(null,400,'resize',80) @endphp
                        @if(count($images)>0)
                        <div class="product-images" style="margin-bottom: 20px;">
                            <div class="fotorama_custom" data-allowfullscreen="true">
                                @foreach($images as $image)
                                    <img src="{{ $image }}" alt="{{ $product->title . ' ' . $loop->iteration }}">
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                                <div class="gdlr-core-title-item-title-wrap  gdlr-core-js-2 gdlr-core-with-divider">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size:1.5em; margin-left: 30px;margin-right: 30px;">{{ $product->title }}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                                    <div class="gdlr-core-title-item-divider gdlr-core-left gdlr-core-skin-divider" style="border-color: rgb(216, 216, 216); width: 317px;"></div>
                                    <div class="gdlr-core-title-item-divider gdlr-core-right gdlr-core-skin-divider" style="border-color: rgb(216, 216, 216); width: 317px;"></div>
                                </div>
                            </div>
                        </div>
                        @if($product->description || $product->technical_description)
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-tab-item gdlr-core-js gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-tab-style2-horizontal gdlr-core-item-pdlr">
                                <div class="gdlr-core-tab-item-title-wrap clearfix gdlr-core-title-font">
                                    <div class="gdlr-core-tab-item-title gdlr-core-active" data-tab-id="1">{{ trans('themes::store.products.titles.info') }}</div>
                                    <div class="gdlr-core-tab-item-title" data-tab-id="2">{{ trans('themes::store.products.titles.desc') }}</div>
                                    @if($product->technical_description)
                                    <div class="gdlr-core-tab-item-title " data-tab-id="3">{{ trans('themes::store.products.titles.technical desc') }}</div>
                                    @endif
                                    <div class="gdlr-core-tab-item-title-line gdlr-core-skin-divider"></div>
                                </div>
                                <div class="gdlr-core-tab-item-content-wrap clearfix">
                                    <div class="gdlr-core-tab-item-content gdlr-core-active" data-tab-id="1">
                                        <table>
                                            @if(@$product->present()->category_title)
                                            <tr>
                                                <th>{{ trans('themes::store.products.titles.category') }}</th>
                                                <td>{{ $product->present()->category_title }}</td>
                                            </tr>
                                            @endif
                                            @if(@$product->brand->title)
                                            <tr>
                                                <th>{{ trans('themes::store.products.titles.brand') }}</th>
                                                <td>{{ $product->brand->title }}</td>
                                            </tr>
                                            @endif
                                            @if($product->model)
                                            <tr>
                                                <th>{{ trans('themes::store.products.titles.original no') }}</th>
                                                <td>{{ $product->model }}</td>
                                            </tr>
                                            @endif
                                            @if($product->sku)
                                            <tr>
                                                <th>{{ trans('themes::store.products.titles.gyp') }}</th>
                                                <td>{{ $product->sku }}</td>
                                            </tr>
                                            @endif
                                            @isset($product->settings)
                                                <tr>
                                                    @foreach(array_keys((array)$product->settings) as $key)
                                                        <th>{{ trans('themes::store.products.settings.'.$key) }}</th>
                                                        <td>{{ $product->settings->{$key} }}</td>
                                                    @endforeach
                                                </tr>
                                            @endisset
                                            @if($product->price > 0 || Auth::check())
                                                <tr>
                                                    <th>{{ trans('themes::store.products.titles.price') }}</th>
                                                    <td>{{ $product->price }}</td>
                                                </tr>
                                            @endif
                                        </table>
                                    </div>
                                    <div class="gdlr-core-tab-item-content" data-tab-id="2">
                                        {!! $product->description !!}
                                    </div>
                                    @if($product->technical_description)
                                    <div class="gdlr-core-tab-item-content" data-tab-id="3">
                                        {!! $product->technical_description !!}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @include('store::partials.sidebar')
            </div>
        </div>
    </div>
@endsection

@push('js-inline')
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <style>
        .fotorama__wrap {
            margin: 0 auto;
        }
    </style>
    <script>
        var $fotoramaDiv = jQuery('.fotorama_custom').fotorama({
            allowfullscreen: true
        });
        var fotorama = $fotoramaDiv.data('fotorama');

        jQuery('.fotorama__stage__shaft').on('click',function () {
            fotorama.cancelFullScreen();
        });
    </script>
@endpush
