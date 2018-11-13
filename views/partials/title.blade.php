<div class="realfactory-page-title-wrap  realfactory-style-custom realfactory-left-align">
    <div class="realfactory-header-transparent-substitute"></div>
    <div class="realfactory-page-title-overlay"></div>
    <div class="realfactory-page-title-container realfactory-container">
        <div class="realfactory-page-title-content realfactory-item-pdlr">
            <h1 class="realfactory-page-title">{{ $slot ?? null }}</h1>
            @isset($slogan)
                <div class="realfactory-page-caption">{{ $slogan }}</div>
            @endisset
        </div>
    </div>
</div>
@isset($breadcrumb)
{!! Breadcrumbs::renderIfExists($breadcrumb) !!}
@endisset