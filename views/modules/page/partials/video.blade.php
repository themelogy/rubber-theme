<br/>
<a class="js-modal-btn btn btn-info md-m-top-10" style="color:white;" data-video-id="{{ $page->settings->embed_video ?? '' }}" href="#"><i class="fa fa-play"></i> {{ trans('themes::theme.buttons.video') }}</a>

@push('css-stack')
    {!! Theme::style('plugins/modal-video/css/modal-video.min.css') !!}
@endpush

@push('js-stack')
    {!! Theme::script('plugins/modal-video/js/jquery-modal-video.min.js') !!}
@endpush

@push('js-inline')
    <script>
        jQuery(document).ready(function(){
            jQuery(".js-modal-btn").modalVideo({
                autoplay: 1
            });
        });
    </script>
@endpush
