{!! seo_helper()->render() !!}
<link rel="icon" href="{{ Theme::url('images/favicon.png') }}" type="image/png"/>
{!! Theme::style("plugins/revslider/public/assets/css/settings.css") !!}
@if(App::environment()=='local')
{!! Theme::style("css/style-core.css") !!}
@else
<link rel="stylesheet" href="{{ elixir('css/style-core.min.css', 'themes/rubber') }}" />
@endif
{!! Theme::style("vendor/flag-icon-css/css/flag-icon.css") !!}
