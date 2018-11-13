@extends('layouts.master')

@section('breadcrumbs')
    @component('partials.title', ['breadcrumb'=>'contact'])
        {{ trans('themes::contact.title') }}
    @endcomponent
@endsection

@section('content')
    <div class="gdlr-core-page-builder-body" style="padding: 40px 0;">
        <div class="container">
            <div class="col-md-6">
                @locations('contact')
            </div>
            <div class="col-md-6">
                @include('contact::form')
            </div>
        </div>
    </div>
@stop
