@extends('layouts.master')

@section('breadcrumbs')
    @component('partials.title', ['breadcrumb'=>'page'])
        {{ $page->title }}
    @endcomponent
@endsection

@section('content')
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-sidebar-wrapper ">
            <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-45 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-right" style="padding: 60px 0px 30px 30px;">
                    <div class="gdlr-core-pbf-sidebar-content-inner">
                        @include('page::partials.image',['page'=>$page])
                    </div>
                </div>
                <div class="gdlr-core-pbf-sidebar-left gdlr-core-column-extend-left  realfactory-sidebar-area gdlr-core-column-15 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 60px 30px 30px 0px;">
                    <div class="gdlr-core-pbf-background-wrap" style="background-color: #f9f9f9 ;"></div>
                    <div class="gdlr-core-sidebar-item">
                        @parentMenu($page, 'left-children')
                        @storeLatestProduct(7, 'left-product')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
