<div class="gdlr-core-alert-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
    <div class="gdlr-core-alert-box-item-inner gdlr-core-skin-e-background gdlr-core-skin-border alert-{{ $alert ?? 'danger' }}">
        <div class="gdlr-core-alert-box-remove gdlr-core-js"><i class="fa fa-remove"></i></div>
        @isset($title)
        <div class="gdlr-core-alert-box-item-head">
            <div class="gdlr-core-alert-box-item-icon"><i class="fa fa-lightbulb-o"></i></div>
            <h3 class="gdlr-core-alert-box-item-title gdlr-core-skin-title">{{ $title ?? '' }}</h3>
        </div>
        @endisset
        @isset($content)
        <div class="gdlr-core-alert-box-item-content gdlr-core-skin-e-content">
            <p>{{ $slot }}</p>
        </div>
        @endisset
    </div>
</div>