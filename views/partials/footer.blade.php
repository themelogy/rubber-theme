<footer>
    <div class="realfactory-footer-wrapper">
        <div class="realfactory-footer-container realfactory-container clearfix">
            <div class="realfactory-footer-column realfactory-item-pdlr realfactory-column-15">
                <div id="text-3" class="widget widget_text realfactory-widget">
                    <div class="textwidget"><span class="gdlr-core-space-shortcode" style="margin-top: -2px;"></span> <img src="{{ Theme::url('images/upload/logo-white.png') }}" alt=""> <span class="gdlr-core-space-shortcode" style="margin-top: 7px;"></span>{{ trans('themes::theme.footer.info') }}</div>
                    <img src="{{ Theme::url('images/upload/444-46-41.png') }}"  alt="gülhan kauçuk iletişim"/> </div>
            </div>
            <div class="realfactory-footer-column realfactory-item-pdlr realfactory-column-15">
                <div id="nav_menu-4" class="widget widget_nav_menu realfactory-widget">
                    @storeCategory(8, 'footer.category')
                </div>
            </div>
            <div class="realfactory-footer-column realfactory-item-pdlr realfactory-column-15">
                <div id="text-7" class="widget widget_text realfactory-widget">
                    @location('satis-magazasi', 'footer')
                </div>
            </div>
            <div class="realfactory-footer-column realfactory-item-pdlr realfactory-column-15">
                <div id="text-7" class="widget widget_text realfactory-widget">
                    @location('fabrika-iletisim', 'footer')
                </div>
            </div>
        </div>
    </div>
    <div class="realfactory-copyright-wrapper">
        <div class="realfactory-copyright-container realfactory-container">
            <div class="realfactory-copyright-text realfactory-item-pdlr">{!! trans('themes::theme.footer.copyrights', ['company'=>setting('theme::company-name'), 'date'=>\Carbon\Carbon::now()->format('Y')]) !!}</div>
        </div>
    </div>
</footer>