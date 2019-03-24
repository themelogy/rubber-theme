<h3 class="realfactory-widget-title">{{ $location->name }}</h3>
<div class="textwidget">
    <p>
        @if(!empty($location->address))
        <i class="fa fa-location-arrow" style="font-size: 20px;color: #f7c02e;margin-left: 0px;margin-right: 10px;"></i>{{ $location->present()->address }}<br>
        <span class="gdlr-core-space-shortcode" style="margin-top: -6px;"></span> <br>
        @endif
        @if(!empty($location->phone1))
        <a style="color:white;" href="tel:{{ $location->phone1 }}"><i class="fa fa-phone" style="font-size: 20px;color: #f7c02e;margin-right: 10px;"></i> {{ $location->phone1 }}</a><br>
        <span class="gdlr-core-space-shortcode" style="margin-top: -6px;"></span> <br>
        @endif
        @if(!empty($location->phone2))
            <i class="fa fa-phone" style="font-size: 20px;color: #f7c02e;margin-right: 10px;"></i> {{ $location->phone2 }}<br>
            <span class="gdlr-core-space-shortcode" style="margin-top: -6px;"></span> <br>
        @endif
        @if(!empty($location->fax))
        <i class="fa fa-fax" style="font-size: 20px;color: #f7c02e;margin-right: 10px;"></i> {{ $location->fax }} <br>
        <span class="gdlr-core-space-shortcode" style="margin-top: -6px;"></span> <br>
        @endif
        @if(!empty($location->email))
        <a style="color:white;" href="mailto:{{ $location->email }}"><i class="fa fa-envelope-o" style="font-size: 20px;color: #f7c02e;margin-left: 0px;margin-right: 10px;"></i> {{ $location->email }}</a></p>
        @endif
</div>
