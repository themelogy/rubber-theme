<noscript id="deferred-styles">
    {!! Theme::style("plugins/goodlayers-core/plugins/combine/style.css") !!}
    {!! Theme::style("plugins/goodlayers-core/include/css/page-builder.css") !!}
    @stack('css-stack')
    {!! Asset::css() !!}
</noscript>
@stack('css-inline')
{!! Theme::script("js/jquery/jquery.js") !!}
{!! Theme::script("js/jquery/jquery-migrate.min.js", ['defer']) !!}
{!! Theme::script("js/jquery/ui/effect.min.js", ['defer']) !!}
{!! Theme::script("js/script.js", ['defer']) !!}
{!! Theme::script("plugins/goodlayers-core/plugins/combine/script.js", ['defer']) !!}
{!! Theme::script("plugins/goodlayers-core/include/js/page-builder.js", ['defer']) !!}
{!! Asset::js('footer') !!}
@stack('js-stack')
@stack('js-inline')
<script>
    var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
    };
    var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
        window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
    if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
    else window.addEventListener('load', loadDeferredStyles);
</script>
<script async>
    WebFontConfig = { google: {
            families: [
                'Roboto:400,300,100,500,700:latin-ext',
                'Open Sans:400italic,400,300,600:latin-ext',
                'Roboto Condensed:400,300,100,500,700:latin-ext'
            ]
        }};
    (function(d) {
        var wf = d.createElement('script'), s = d.scripts[0];
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
    })(document);
</script>

{!! setting('core::analytics-script') !!}