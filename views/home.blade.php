@extends('layouts.master')

@section('content')
    <div class="gdlr-core-page-builder-body">
    @themeSlide('anasayfa', 'slider')
    @findPage('hakkimizda', 'home.intro')
    @include('page::widgets.home.call')
    @storeCategory(6,'home.category')
    @storeNewProducts(8, 'home.product')
    @include('partials.content.three-box')
    @guestbookLatest(6, 'home.latest')
    @portfolioBrands(10, 'home.brands')
    </div>
@endsection