<div class="realfactory-top-bar">
    <div class="realfactory-top-bar-background"></div>
    <div class="realfactory-top-bar-container clearfix realfactory-container ">
        <div class="realfactory-top-bar-left realfactory-item-pdlr">
            <div class="gdlr-core-dropdown-tab gdlr-core-js clearfix">
                <div class="gdlr-core-dropdown-tab-title">
                    <span class="gdlr-core-head">{{ LaravelLocalization::getCurrentLocaleNative() }}</span>
                    <div class="gdlr-core-dropdown-tab-head-wrap">
                        @foreach(LaravelLocalization::getSupportedLocales() as $locale => $supportedLocale)
                        <div class="gdlr-core-dropdown-tab-head{{ $locale==locale() ? ' gdlr-core-active' : '' }}" data-index="{{ $loop->iteration }}"><a href="{{ url($locale) }}">{!! $supportedLocale['native'] !!}</a></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="realfactory-top-bar-right realfactory-item-pdlr">
            <div class="realfactory-top-bar-right-social">
                <strong class="hidden-xs" style="text-transform: uppercase;">{{ trans('themes::theme.header.call') }}</strong> <i class="fa fa-phone"></i> <strong> {{ setting('theme::phone') }}</strong>
                @foreach(['facebook' => 'fa-facebook-f', 'twitter'=>'fa-twitter', 'google'=>'fa-google-plus-g', 'whatsapp'=>'fa-whatsapp', 'linkedin'=>'fa-linkedin', 'youtube'=>'fa-youtube-play', 'email'=>'fa-envelope'] as $sk => $sv)
                @if(setting('theme::'.$sk))
                <a href="{{ setting('theme::'.$sk) }}" target="_blank" class="realfactory-top-bar-social-icon" title="{{ $sk }}">
                    <i class="fa {{ $sv }}"></i>
                </a>
                @endif
                @endforeach
                @auth
                    <a target="_blank" href="{{ route('dashboard.index') }}">Yönetim Paneli</a>
                @endauth
            </div>
        </div>
    </div>
</div>
