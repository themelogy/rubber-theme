<br/>
<a class="play-1 btn btn-info md-m-top-10" style="color:white;" href="{{ $page->settings->video ?? '' }}"><i class="fa fa-play"></i> {{ trans('themes::theme.buttons.video') }}</a>

@push('css-stack')
    {!! Theme::style('js/youtubeurl/jquery.yu2fvl.css') !!}
@endpush

@push('js-stack')
    {!! Theme::script('js/youtubeurl/jquery.yu2fvl.min.js') !!}
@endpush

@push('js-inline')
    <script> jQuery('.play-1').yu2fvl({minPaddingX: 200, minPaddingY: 200}); </script>
@endpush