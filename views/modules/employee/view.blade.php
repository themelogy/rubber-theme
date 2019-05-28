@extends('layouts.master')

@section('breadcrumbs')
    @component('partials.title', ['breadcrumb'=>'employee.view'])
        <h1>{{ $employee->fullname }}</h1>
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
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="img-thumbnail" src="{{ $employee->present()->firstImage(270,null,'resize',80) }}" alt="{{ $employee->fullname }}" />
                                    </div>
                                    <div class="col-md-9">
                                        <h3>{{ $employee->fullname }}<br/><small>{{ $employee->position }}</small></h3>
                                        <div class="meta" style="margin-top: 20px;">
                                            <p>
                                                @if(!empty($employee->phone))
                                                <i class="fa fa-phone"></i> <a rel="nofollow" href="tel:{{ $employee->phone }}">{{ $employee->phone }}</a><br/>
                                                @endif
                                                @if(!empty($employee->fax))
                                                <i class="fa fa-fax"></i> {{ $employee->fax }}<br/>
                                                @endif
                                                @if(!empty($employee->email))
                                                <i class="fa fa-envelope"></i> <a rel="nofollow" href="mailto:{{ Html::email($employee->email) }}">{{ Html::email($employee->email) }}</a>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
