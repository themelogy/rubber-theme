<h3 class="realfactory-widget-title">{{ $location->name }}</h3>
<div class="textwidget">
    <p><i class="fa fa-location-arrow" style="font-size: 20px;color: #f7c02e;margin-left: 0px;margin-right: 10px;"></i>{{ $location->present()->address }}<br>
        <span class="gdlr-core-space-shortcode" style="margin-top: -6px;"></span> <br>
        <i class="fa fa-phone" style="font-size: 20px;color: #f7c02e;margin-right: 10px;"></i> {{ $location->phone1 }}<br>
        <span class="gdlr-core-space-shortcode" style="margin-top: -6px;"></span> <br>
        <i class="fa fa-fax" style="font-size: 20px;color: #f7c02e;margin-right: 10px;"></i> {{ $location->fax }} <br>
        <span class="gdlr-core-space-shortcode" style="margin-top: -6px;"></span> <br>
        <i class="fa fa-envelope-o" style="font-size: 20px;color: #f7c02e;margin-left: 0px;margin-right: 10px;"></i>{{ $location->email }}</p>
</div>