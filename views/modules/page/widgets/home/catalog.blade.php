<div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 85px 25px 40px 10px;" data-sync-height="height-financial">
    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
        <div class="gdlr-core-pbf-element">
            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 45px;">
                <div class="gdlr-core-title-item-title-wrap ">
                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 28px;font-weight: 500;letter-spacing: 0px;text-transform: none;color: #141414;">{{ trans('themes::page.title.introductory video') }}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                </div>
            </div>
        </div>
        @isset($page->settings->embed_video)
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 25px;">
                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;">
                        <a class="play-1 btn btn-info m-t-10" href="{{ $page->settings->embed_video ?? '' }}">
                            <img src="{{ Theme::url('images/upload/gulhan-movie.jpg') }}" alt="{{ $page->title }}">
                        </a>
                    </div>
                </div>
            </div>
        @endisset
        <div class="gdlr-core-pbf-element">
            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-with-divider">
                <ul>
                    @foreach($page->present()->files as $file)
                        <li class=" gdlr-core-skin-divider gdlr-core-with-hover" style="border-color: #d8d8d8;margin-bottom: 3px;">
                            <a href="{{ $file->path }}" target="_blank">
                                <span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon-hover icon_check_alt2" style="font-size: 16px;width: 16px;"></i><i class="gdlr-core-icon-list-icon icon_check_alt2" style="font-size: 16px;width: 16px;"></i></span><span class="gdlr-core-icon-list-content" style="font-size: 15px;">{{ $file->alt_attribute }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@push('css-stack')
    {!! Theme::style('js/youtubeurl/jquery.yu2fvl.css') !!}
@endpush

@push('js-stack')
    {!! Theme::script('js/youtubeurl/jquery.yu2fvl.min.js') !!}
@endpush

@push('js-inline')
    <script> jQuery(document).ready(function(){
            jQuery('.play-1').yu2fvl({minPaddingX: 600, minPaddingY: 200});
        });</script>
@endpush