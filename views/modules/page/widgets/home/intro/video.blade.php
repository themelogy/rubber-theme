<div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-hide-in-mobile">
    <a class="js-modal-btn" data-video-id="{{ $page->settings->embed_video ?? '' }}" data-autoplay="true" href="#">
    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: -100px 0px 0px 0px;padding: 75px 0px 65px 0px;" data-sync-height="height-service-1">
        <div class="gdlr-core-pbf-background-wrap">
            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{ Theme::url('images/upload/service-3-1.jpg') }});background-size: cover;background-position: center;" data-parallax-speed="0"></div>
        </div>
        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                    <div class="gdlr-core-title-item-title-wrap ">
                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 23px;font-weight: 300;letter-spacing: 0px;text-transform: none;color: #f8c12c;">{{ trans('themes::theme.home.box.intro video') }}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </a>
</div>

@push('css-stack')
    {!! Theme::style('plugins/modal-video/css/modal-video.min.css') !!}
@endpush

@push('js-stack')
    {!! Theme::script('plugins/modal-video/js/jquery-modal-video.min.js') !!}
@endpush

@push('js-inline')
    <script>
        jQuery(document).ready(function(){
            jQuery(".js-modal-btn").modalVideo({
                youtube : {
                	autoplay: true
                }
            });
        });
    </script>
@endpush
