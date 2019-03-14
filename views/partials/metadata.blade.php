{!! seo_helper()->render() !!}
{!! Theme::style("plugins/revslider/public/assets/css/settings.css") !!}
@if(App::environment()=='local')
{!! Theme::style("css/style-core.css") !!}
@else
<link rel="stylesheet" href="{{ elixir('css/style-core.min.css', 'themes/rubber') }}" />
@endif
