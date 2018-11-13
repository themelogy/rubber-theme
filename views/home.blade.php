@extends('layouts.master')

@section('content')
    <div class="gdlr-core-page-builder-body">
    @themeSlide('anasayfa', 'slider')
    @include('page::widgets.home.intro')
    @include('page::widgets.home.call')
    @storeCategory(6,'home.category')
    @storeLatestProduct(8, 'home.product')
    @guestbookLatest(6, 'home.latest')
    @portfolioBrands(10, 'home.brands')
    </div>
@endsection