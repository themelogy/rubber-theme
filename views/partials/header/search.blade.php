<div class="realfactory-main-menu-search" id="realfactory-top-search"><a href="#" class="sf-with-ul-pre"><strong>{{ trans('themes::theme.home.search.placeholder1') }}</strong></a> <i class="fa fa-search"></i></div>

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
