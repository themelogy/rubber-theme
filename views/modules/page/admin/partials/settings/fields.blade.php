<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        @foreach(LaravelLocalization::getSupportedLocales() as $locale => $language)
                <li class="{{ $loop->first ? 'active' : '' }}"><a href="#text_field_{{ $locale }}" data-toggle="tab">{{ $language['native'] }}</a></li>
        @endforeach
    </ul>
    <div class="tab-content">
        @foreach(LaravelLocalization::getSupportedLocales() as $locale => $language)
                <div class="tab-pane {{ $loop->first ? 'active' : '' }}" id="text_field_{{ $locale }}">
                    @foreach($fields as $field)
                        @includeIf('page::admin.partials.settings.fields.'.$field['type'], compact('field'))
                    @endforeach
                </div>
        @endforeach
    </div>
</div>

@push('js-stack')
    <script>
        $(document).ready(function(){
            $(".textarea-editor").wysihtml5();
        });
    </script>
@endpush