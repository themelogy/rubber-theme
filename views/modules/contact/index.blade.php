@extends('layouts.master')

@section('breadcrumbs')
    @component('partials.title', ['breadcrumb'=>'contact'])
        {{ trans('themes::contact.title') }}
    @endcomponent
@endsection

@section('content')
    <div class="gdlr-core-page-builder-body" style="padding: 40px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @locations('contact')
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="padding: 10px">
                        @include('contact::form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
