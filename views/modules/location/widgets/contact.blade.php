<div class="gdlr-core-pbf-element">
    <div class="gdlr-core-tab-item gdlr-core-js gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-tab-style1-horizontal gdlr-core-item-pdlr">
        <div class="gdlr-core-tab-item-title-wrap clearfix gdlr-core-title-font">
            @foreach($locations as $location)
            <div class="gdlr-core-tab-item-title{{ $loop->first ? ' gdlr-core-active': '' }}" data-tab-id="{{ $loop->iteration }}">{{ $location->name }}</div>
            @endforeach
        </div>
        <div class="gdlr-core-tab-item-content-wrap clearfix">
            @foreach($locations as $location)
            <div class="gdlr-core-tab-item-content{{ $loop->first ? ' gdlr-core-active': '' }}" data-tab-id="{{ $loop->iteration }}">
                <div class="textwidget">
                    <p><i class="fa fa-location-arrow" style="font-size: 20px;color: #f7c02e;margin-left: 0px;margin-right: 10px;"></i>{{ $location->present()->address }}<br>
                        <span class="gdlr-core-space-shortcode" style="margin-top: -6px;"></span> <br>
                        <a href="tel:{{ $location->phone1 }}"><i class="fa fa-phone" style="font-size: 20px;color: #f7c02e;margin-right: 10px;"></i> {{ $location->phone1 }}</a><br>
                        <span class="gdlr-core-space-shortcode" style="margin-top: -6px;"></span> <br>
                        <i class="fa fa-fax" style="font-size: 20px;color: #f7c02e;margin-right: 10px;"></i> {{ $location->fax }} <br>
                        <span class="gdlr-core-space-shortcode" style="margin-top: -6px;"></span> <br>
                        <a href="mailto:{{ $location->email }}"><i class="fa fa-envelope-o" style="font-size: 20px;color: #f7c02e;margin-left: 0px;margin-right: 10px;"></i>{{ $location->email }}</a></p>
                </div>
                <div class="map-style">
                    <div id="map{{ $location->id }}" style="height: 300px;"></div>
                    <div class="direction">
                        <a style="width: 100%;" target="_blank" href="https://www.google.com/maps/dir/Current+Location/{!! $location->lat.','.$location->long !!}" class="btn btn-default">Yol Tarifi Al</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@push('js-inline')
    <script>
        function initMap() {
            @foreach($locations as $location)
                var coordinate{{ $location->id }} = {lat: {{ $location->lat }}, lng: {{ $location->long }} };
                var map{{ $location->id }} = new google.maps.Map(document.getElementById('map{{ $location->id }}'), {
                    zoom: 15,
                    center: coordinate{{ $location->id }}
                });
                var marker{{ $location->id }} = new google.maps.Marker({
                    position: coordinate{{ $location->id }},
                    map: map{{ $location->id }},
                    icon: "{{ Theme::url('images/favicon.png') }}"
                });
            @endforeach
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpvcV4WyemrP7OUfrDuXTkEaazIzwqe1U&callback=initMap&language={{ locale() }}"></script>
@endpush
