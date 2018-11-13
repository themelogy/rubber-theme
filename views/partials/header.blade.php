@include('partials.header.topbar')
<header class="realfactory-header-wrap realfactory-header-style-bar realfactory-header-background  realfactory-style-left">
    <div class="realfactory-header-container clearfix  realfactory-container">
        <div class="realfactory-header-container-inner">
            <div class="realfactory-logo  realfactory-item-pdlr">
                <div class="realfactory-logo-inner"> <a href="@homepage"><img src="{{ Theme::url('images/logo.png') }}" alt=""></a> </div>
            </div>
        </div>
    </div>
</header>
<div class="realfactory-navigation-bar-wrap  realfactory-style-transparent realfactory-sticky-navigation realfactory-sticky-navigation-height realfactory-style-left  realfactory-style-fixed realfactory-without-placeholder">
    <div class="realfactory-navigation-background"></div>
    <div class="realfactory-navigation-container clearfix  realfactory-container">
        <div class="realfactory-navigation realfactory-item-pdlr clearfix ">
            <div class="realfactory-main-menu" id="realfactory-main-menu">
                {!! Menu::render('header', \Themes\Rubber\Presenter\HeaderMenuPresenter::class) !!}
                <div class="realfactory-navigation-slide-bar" id="realfactory-navigation-slide-bar"></div>
            </div>
            <div class="realfactory-main-menu-right-wrap clearfix ">
                @include('partials.header.search')
            </div>
        </div>
    </div>
</div>