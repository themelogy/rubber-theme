@extends('layouts.master')

@section('breadcrumbs')
    @component('partials.title', ['breadcrumb'=>'guestbook.index'])
        {{ trans('themes::guestbook.title') }}
    @endcomponent
@endsection

@section('content')
    <div class="gdlr-core-page-builder-body" style="padding: 40px 0;">
        <div class="container">
            @foreach($reviews->chunk(3) as $chunk)
            <div class="row">
                @foreach($chunk as $review)
                    <div class="col-md-3">
                        <div class="thumbnail" style="padding: 10px;">
                            <h5>{{ $review->fullname }}</h5>
                            <div class="content">
                                {{ strip_tags($review->message) }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                {!! $reviews->render('partials.pagination') !!}
            </div>
            @endforeach
        </div>
    </div>
@stop
