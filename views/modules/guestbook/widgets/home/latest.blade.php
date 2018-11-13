<div class="gdlr-core-pbf-wrapper testimonials" style="padding: 110px 0 70px 0;" data-skin="Dark">
    <div class="gdlr-core-pbf-background-wrap">
        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{ Theme::url('images/upload/testimonial-bg.jpg') }});background-size: cover;background-position: center;" data-parallax-speed="0.2"></div>
    </div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" style="max-width: 655px;">
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                    <div class="gdlr-core-title-item-title-wrap ">
                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 36px;font-weight: 300;letter-spacing: 0px;text-transform: none;color: #f8c12c;">{{ trans('themes::guestbook.customer experiences') }}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-divider-item-normal" style="padding-bottom: 50px;">
                    <div class="gdlr-core-divider-container gdlr-core-center-align" style="max-width: 87px;">
                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-bottom-width: 2px;"></div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-testimonial-item gdlr-core-item-pdb clearfix  gdlr-core-testimonial-style-center gdlr-core-item-pdlr">
                    <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 gdlr-core-nav-style-middle-large" data-type="carousel" data-column="1" data-nav="bullet" data-vcenter-nav="1">
                        <ul class="slides">
                            @foreach($comments as $comment)
                            <li class="gdlr-core-item-mglr">
                                <div class="gdlr-core-testimonial clearfix">
                                    <div class="gdlr-core-testimonial-content-wrap">
                                        <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 21px;">
                                            <p>{{ strip_tags($comment->message) }}</p>
                                        </div>
                                        <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon">&#8220;</div>
                                        <div class="gdlr-core-testimonial-author-wrap clearfix">
                                            <div class="gdlr-core-testimonial-author-image gdlr-core-media-image"><img src="{{ $comment->present()->firstImage(120,120,'fit',50) }}" alt="{{ $comment->fullname }}"></div>
                                            <div class="gdlr-core-testimonial-author-content">
                                                <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #ffffff;">{{ $comment->fullname }}</div>
                                                {{--<div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption">Caterpillar</div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>