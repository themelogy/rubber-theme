@extends('layouts.master')

@section('breadcrumbs')
    @component('partials.title', ['breadcrumb'=>'store.category'])
        {{ $category->title }}
    @endcomponent
@endsection

@section('content')
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-sidebar-wrapper ">
            <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-45 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-right" style="padding: 60px 0px 30px 30px;">
                    <div class="gdlr-core-pbf-sidebar-content-inner">
                        <div class="gdlr-core-portfolio-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                            @include('store::partials.product-row')
                        </div>
                    </div>
                    {!! $products->render('partials.pagination') !!}
                    @unset($products)
                </div>
                @include('store::partials.sidebar')
            </div>
        </div>
    </div>
@endsection