@extends('layouts.master')

@section('breadcrumbs')
    @component('partials.title', ['breadcrumb'=>'page'])
        {{ $page->title }}
    @endcomponent
@endsection

@section('content')
    <div class="gdlr-core-page-builder-body">

        <div class="gdlr-core-pbf-sidebar-wrapper">
            <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container"  style="padding-top: 20px; padding-left: 30px;">
                @if(isset($page->parent) && ($page->parent->settings->show_menu ?? false) && !($page->settings->full_page ?? false))
                    @include('page::partials.menu')
                @elseif($page && ($page->settings->list_page ?? false))
                    @include('page::partials.list')
                @elseif($page && !($page->settings->list_page ?? false) && !($page->parent->settings->show_menu ?? false))
                    @include('page::partials.image')
                @endif
            </div>
        </div>
        @videoLatest(3, 'latest')
        @galleryLatest(3, 'latest')
    </div>
@stop
