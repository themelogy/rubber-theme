<div class="gdlr-core-pbf-column-content-margin gdlr-core-js  gdlr-core-column-extend-right" style="padding: 80px 0px 35px 56px;" data-sync-height="height-financial">
    <div class="gdlr-core-pbf-background-wrap">
        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{ Theme::url('images/upload/career-bg.jpg') }});background-size: cover;background-position: center;" data-parallax-speed="0.2"></div>
    </div>
    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
        <div class="gdlr-core-pbf-element">
            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px;">
                <div class="gdlr-core-title-item-title-wrap ">
                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 35px;font-weight: 300;letter-spacing: 0px;text-transform: none;color: #f8c12c;">{{ $page->title }}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-element">
            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                <div class="gdlr-core-text-box-item-content" style="font-size: 18px;">
                    <p>{{ $page->settings->slogan->{locale()} ?? '' }}</p>
                </div>
            </div>
        </div>
        @isset($page->settings->sub_title->{locale()})
        <div class="gdlr-core-pbf-element">
            <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                <a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-with-border" href="{{ $page->url }}" style="font-size: 15px;color: #f8c12c;padding: 15px 28px 15px 28px;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;border-width: 2px 2px 2px 2px;border-color: #f8c12c;">
                    <span class="gdlr-core-content">{{ $page->settings->sub_title->{locale()} ?? '' }}</span>
                </a>
            </div>
            <a href="@homepage"><img src="{{ Theme::url('images/logo.png') }}" alt="{{ setting('theme::company-name') }}"></a>
        </div>
        @endisset
    </div>
</div>