<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" class="no-js">
<head>
    @include('partials.metadata')
</head>

<body data-rsssl="1" class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js realfactory-body realfactory-body-front realfactory-full  realfactory-with-sticky-navigation gdlr-core-link-to-lightbox">
@include('partials.header.mobile')
<div class="realfactory-body-outer-wrapper ">
    <div class="realfactory-body-wrapper clearfix  realfactory-with-transparent-navigation realfactory-with-frame">
        @include('partials.header')
        @yield('breadcrumbs')
        <div class="realfactory-page-wrapper" id="realfactory-page-wrapper">
            @yield('content')
        </div>
        @include('partials.footer')
    </div>
</div>
@include('partials.scripts')
</body>
</html>