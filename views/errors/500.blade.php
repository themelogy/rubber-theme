@extends('layouts.master')

@php
    seo_helper()->setTitle('404 - '.trans('themes::theme.messages.page not found'))
@endphp

@section('breadcrumbs')
    @component('partials.title')
        <h1>404 - {{ trans('themes::theme.messages.page not found') }}</h1>
    @endcomponent
@endsection

@section('content')
    <div class="realfactory-page-wrapper" id="realfactory-page-wrapper">
        <div class="gdlr-core-page-builder-body">
            <div class="gdlr-core-pbf-wrapper " style="padding: 90px 0px 20px 0px;">
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-modern gdlr-core-personnel-style-modern gdlr-core-with-divider ">
                                <h2>404</h2>
                                <h3>{{ trans('themes::theme.messages.page not found') }}</h3>
                                <p>{{ trans('themes::theme.messages.page not found message') }}</p>
                                <div>
                                    <a href="{{ route('homepage') }}" class="theme-button-one">{{ trans('themes::theme.buttons.return homepage') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
