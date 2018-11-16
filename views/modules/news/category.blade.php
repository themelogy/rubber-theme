@extends('layouts.master')

@section('breadcrumbs')
    @component('partials.title', ['breadcrumb'=>'news.category'])
        {{ $category->name }}
    @endcomponent
@endsection

@section('content')
    <div class="realfactory-content-container realfactory-container">
        <div class=" realfactory-sidebar-wrap clearfix realfactory-line-height-0 realfactory-sidebar-style-right">
            <div class=" realfactory-sidebar-center realfactory-column-40 realfactory-line-height">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-section">
                        <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full" style="padding-bottom: 40px;">
                                    <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                        @foreach($posts as $post)
                                            @include('news::partials.post')
                                        @endforeach
                                    </div>
                                    {!! $posts->render('partials.pagination') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('news::partials.sidebar')
        </div>
    </div>
@stop
