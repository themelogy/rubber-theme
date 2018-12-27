<div class="gdlr-core-pbf-wrapper slider" style="padding: 0;">
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px;">
                    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:#262626;padding:0px;margin-top:0px;margin-bottom:0px;">
                        <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.5.1">
                            <ul>
                                @foreach($slides as $slide)
                                <li data-index="rs-{{ $loop->iteration }}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="upload/slider-1-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> 
                                    <img data-lazyload="{{ $slide->present()->firstImage(1800,730,'fit',50) }}" alt="" title="slider-1" width="1800" height="730" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina="">
                                    @if($slide->title)
                                    <div class="tp-caption   tp-resizeme" id="slide-1-layer-1" data-x="20" data-y="center" data-voffset="-50" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","speed":260,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 2em; font-weight: 400; color: rgba(248,193,44,1);font-family:Hind;">{{ $slide->title }}</div>
                                    @endif
                                    @if($slide->sub_title)
                                    <div class="tp-caption   tp-resizeme" id="slide-1-layer-2" data-x="20" data-y="center" data-voffset="0" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":300,"to":"o:1;","delay":830,"ease":"Power2.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 3em; font-weight: 700; color: rgba(247,247,247,1);font-family:Hind;">{{ $slide->sub_title }}</div>
                                    @endif
                                    @if($slide->content)
                                    <div class="tp-caption   tp-resizeme" id="slide-1-layer-4" data-x="20" data-y="center" data-voffset="44" data-width="['666']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":300,"to":"o:1;","delay":1460,"ease":"Power2.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; min-width: 666px; max-width: 666px; white-space: normal; font-size: 20px; line-height: 30px; font-weight: 400; color: rgba(255,255,255,1);font-family:Hind;">{{ $slide->content }}</div>
                                    @endif
                                    @if($slide->link_type != 'none')
                                    <div class="tp-caption rev-btn " id="slide-1-layer-6" data-x="20" data-y="center" data-voffset="130" data-width="['auto']" data-height="['auto']" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":300,"to":"o:1;","delay":1770,"ease":"Power2.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(247,204,86,1);"}]' data-textalign="['left','left','left','left']" data-paddingtop="[17,17,17,17]" data-paddingright="[34,34,34,34]" data-paddingbottom="[17,17,17,17]" data-paddingleft="[34,34,34,34]" style="z-index: 9; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 600; color: rgba(10,10,10,1);font-family:Hind;background-color:rgba(248,193,44,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><a target="{{ $slide->link->target }}" href="{{ $slide->link->url }}">{{ $slide->link_title }}</a></div>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js-stack')
    {!! Theme::script("plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js", ['defer']) !!}
    {!! Theme::script("plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js", ['defer']) !!}
    {!! Theme::script("plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js", ['defer']) !!}
    {!! Theme::script("plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js", ['defer']) !!}
    {!! Theme::script("plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js", ['defer']) !!}
    {!! Theme::script("plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js", ['defer']) !!}
    {!! Theme::script("plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js", ['defer']) !!}
    {!! Theme::script("plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js", ['defer']) !!}
@endpush

@push('js-inline')
    <script type="text/javascript" defer>
        /*<![CDATA[*/
        function setREVStartSize(e) {
            try {
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                    f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        }; /*]]>*/
    </script>
    <script type="text/javascript" defer>
        /*<![CDATA[*/
        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
        } /*]]>*/
    </script>
    <script type="text/javascript" defer>
        setREVStartSize({
            c: jQuery('#rev_slider_1_1'),
            gridwidth: [1180],
            gridheight: [725],
            sliderLayout: 'auto'
        });
        var revapi1, tpj = jQuery;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "//demo.goodlayers.com/realfactory/wp-content/plugins/revslider/public/assets/js/",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        }
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1180,
                    gridheight: 725,
                    lazyType: "smart",
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        });
    </script>
@endpush