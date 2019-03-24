<div class="gdlr-core-pbf-wrapper intro" style="margin: 0;padding: 0;">
    <div class="gdlr-core-pbf-background-wrap">
        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{ Theme::url('images/upload/about-home-bg.jpg') }});background-repeat: repeat;background-position: center;" data-parallax-speed="0.2"></div>
    </div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
            @include('page::widgets.home.intro.products')
            @findPage('sanal-katalog', 'home.intro.catalog')
            @findPage('sanal-katalog', 'home.intro.video')

            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 0px 0px -15px;padding: 100px 0px 0px 0px;">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 15px;">
                                <div class="gdlr-core-title-item-title-wrap ">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 36px;font-weight: 300;letter-spacing: 0px;text-transform: none;">{{ isset($page) ? $page->settings->slogan->{locale()} : trans('themes::theme.home.intro.slogan') }}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-divider-item-normal">
                                <div class="gdlr-core-divider-container gdlr-core-left-align" style="max-width: 106px;">
                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #d8a419;border-bottom-width: 2px;"></div>
                                </div>
                            </div>
                        </div><img src="{{ Theme::url('images/upload/444-46-41-siyah.png') }}" alt="gülhan kauçuk iletişim"/>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-column gdlr-core-column-40">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 100px 0px 0px 0px;">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-left-align" style="padding-bottom: 40px;">
                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src="{{ Theme::url('images/upload/toplu-arac-icon.png') }}" alt="" ></div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 15px;">
                                <div class="gdlr-core-text-box-item-content" style="font-size: 17px;">
                                    {!! Block::get('home-intro') !!}
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                <a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="{{ isset($page) ? $page->url : '' }}" style="color: #f8c12c;padding: 15px 30px 15px 30px;margin: 0px 10px 10px 0px;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;background: #303030 ;"> <span class="gdlr-core-content">{{ trans('themes::theme.buttons.details') }}</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
