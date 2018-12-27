@extends('layouts.master')

@section('breadcrumbs')
    @component('partials.title', ['breadcrumb'=>'hr.position.index'])
        {{ trans_choice('hr::positions.title.positions',1) }}
    @endcomponent
@endsection

@section('content')
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-sidebar-wrapper ">
            <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                <div class="gdlr-core-pbf-sidebar-content-inner" style="padding: 40px 0">
                    @findPage('kariyer', 'page.find')

                    @if($positions->count()>0)
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>{{ trans('hr::positions.form.reference_no') }}</th>
                                <th>{{ trans('hr::positions.form.name') }}</th>
                                <th>{{ trans('hr::positions.form.personal_number') }}</th>
                                <th>{{ trans('hr::positions.form.position.city') }}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($positions as $position)
                                <tr>
                                    <td>{{ $position->reference_no }}</td>
                                    <td>{{ $position->name }}</td>
                                    <td>{{ $position->personal_number }}</td>
                                    <td>{{ $position->present()->position('city') }}</td>
                                    <td><a class="btn btn-default btn-sm waves-effect waves-light" href="{{ route('hr.position.view', [$position->slug]) }}">İncele</a>  <a class="btn btn-default btn-sm waves-effect waves-light" href="{{ route('hr.application.form', ['position_id'=>$position->id]) }}">Başvuru Yap</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <a class="btn btn-warning" href="{{ LaravelLocalization::getLocalizedURL(locale(), route('hr.application.form')) }}">{{ trans('themes::hr.buttons.application') }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection