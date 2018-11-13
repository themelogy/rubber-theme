@stack('css-stack')
@stack('css-inline')
{!! Asset::styles('footer') !!}
<script type="text/javascript">
    WebFontConfig = {
        google: {
            families: [
                'Roboto:400,300,100,500,700:latin-ext',
                'Open Sans:400italic,400,300,600:latin-ext',
                'Roboto Condensed:400,300,100,500,700:latin-ext'
            ]
        },
        timeout: 2000
    };
    (function () {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>
{!! Theme::script("js/jquery/jquery.js") !!}
{!! Theme::script("js/jquery/jquery-migrate.min.js") !!}
{!! Theme::script("js/jquery/ui/effect.min.js") !!}
{!! Theme::script("js/script.js") !!}
{!! Theme::script("plugins/goodlayers-core/plugins/combine/script.js") !!}
{!! Theme::script("plugins/goodlayers-core/include/js/page-builder.js") !!}
<script>
    /*<![CDATA[*/
    var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
    var htmlDivCss = "";
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement("div");
        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
    } /*]]>*/
</script>
<script>
    /*<![CDATA[*/
    var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
    var htmlDivCss = "";
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement("div");
        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
    } /*]]>*/
</script>
{!! Asset::js('footer') !!}
@stack('js-stack')
@stack('js-inline')