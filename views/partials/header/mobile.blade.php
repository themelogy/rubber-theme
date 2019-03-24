<div class="realfactory-mobile-header-wrap">
    <div class="realfactory-mobile-header realfactory-header-background realfactory-style-slide" id="realfactory-mobile-header">
        <div class="realfactory-mobile-header-container realfactory-container">
            <div class="realfactory-logo  realfactory-item-pdlr">
                <div class="realfactory-logo-inner"> <a href="{{ url(locale()) }}"><img src="{{ Theme::url('images/logo.png') }}" alt=""></a> </div>
            </div>
            <div class="realfactory-mobile-menu-right">
                <div class="realfactory-main-menu-search" id="realfactory-mobile-top-search"><i class="fa fa-search"></i></div>
                <div class="realfactory-top-search-wrap">
                    <div class="realfactory-top-search-close"></div>
                    <div class="realfactory-top-search-row">
                        <div class="realfactory-top-search-cell">
                             {!! Form::open(['route'=>'store.product.search', 'class'=>'search-form', 'method'=>'get']) !!}
                            <input type="text" class="search-field realfactory-title-font" placeholder="{{ trans('themes::theme.home.search.placeholder2') }}" value="" name="s">
                            <div class="realfactory-top-search-submit"><i class="fa fa-search"></i></div>
                            <input type="submit" class="search-submit" value="Search">
                            <div class="realfactory-top-search-close"><i class="icon_close"></i></div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="realfactory-mobile-menu"><a class="realfactory-mm-menu-button realfactory-mobile-menu-button realfactory-mobile-button-hamburger-with-border" href="#realfactory-mobile-menu"><i class="fa fa-bars"></i></a>
                    <div class="realfactory-mm-menu-wrap realfactory-navigation-font" id="realfactory-mobile-menu" data-slide="right">
                        {!! Menu::render('header', \Themes\Rubber\Presenter\HeaderMenuMobilePresenter::class) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
