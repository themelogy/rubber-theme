@if($breadcrumbs)
    <div class="realfactory-breadcrumbs">
        <div class="realfactory-breadcrumbs-container realfactory-container">
            <div class="realfactory-breadcrumbs-item realfactory-item-pdlr">
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" href="{{ LaravelLocalization::getLocalizedURL(locale(), route('homepage')) }}" class="home">
                    <span property="name">{{ trans('themes::page.title.homepage') }}</span>
                </a>
            </span>
                @foreach ($breadcrumbs as $crumb)
                    <?php
                    $icon = isset($crumb->icon) ? '<i class="' . $crumb->icon . '"></i> ' : '';
                    ?>
                    @if ($crumb->url && ! $crumb->last)
                        <i class="fa fa-angle-right"></i>
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" href="{{ $crumb->url }}" class="post post-page">
                                <span property="name">{!! $icon !!}{!! Str::words($crumb->title, 6) !!}</span>
                            </a>
                        </span>
                    @else
                        <i class="fa fa-angle-right"></i>
                        <span property="itemListElement" typeof="ListItem">
                            <span property="name">{!! $icon !!}{!! Str::words($crumb->title, 6) !!}</span>
                        </span>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endif