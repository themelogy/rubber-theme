@extends('layouts.master')

@section('breadcrumbs')
    @component('partials.title', ['breadcrumb'=>'employee.index'])
        <h1>{{ trans('themes::employee.title') }}</h1>
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
                                @if(locale()=='en')
                                    @foreach($employees->whereIn('category_id', [10,11])->groupBy('category_id') as $groups)
                                        <h3>{!! $groups->first()->category->name !!}</h3>
                                        @foreach($groups->chunk(4) as $chunk)
                                            <div class="row">
                                                @foreach($chunk as $employee)
                                                    @include('employee::partials._employee')
                                                @endforeach
                                            </div>
                                        @endforeach
                                    @endforeach
                                @else
                                    @foreach($employees->groupBy('category_id') as $groups)
                                        <h3>{!! $groups->first()->category->name !!}</h3>
                                        @foreach($groups->chunk(4) as $chunk)
                                            <div class="row">
                                                @foreach($chunk as $employee)
                                                    @include('employee::partials._employee')
                                                @endforeach
                                            </div>
                                        @endforeach
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
