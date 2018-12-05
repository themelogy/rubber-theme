<div id="nav_menu-3" class="widget widget_nav_menu realfactory-widget">
    {!! Form::open(['route'=>'store.product.search', 'class'=>'search-form', 'method'=>'get']) !!}
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Ürün Ara" value="{{ Request::get('s') }}" name="s">
            <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
        </div>
    {!! Form::close() !!}
</div>