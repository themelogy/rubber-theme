<div class="row">
    <fieldset>
        <legend>Sayfa Gösterim Ayarları</legend>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[show_menu]", "Menü göster", $errors, [0=>'Hayır', 1=>'Evet'], isset($page->settings->show_menu) ? $page->settings->show_menu : 0) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[show_menu_location]", "Menü Gösterim Alanı", $errors, ['left'=>'Sol', 'right'=>'Sağ'], isset($page->settings->show_menu_location) ? $page->settings->show_menu_location : null) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[full_page]", "Tam Sayfa Göster", $errors, [0=>'Hayır', 1=>'Evet'], isset($page->settings->full_page) ? $page->settings->full_page : 0) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[show_content]", "İçerik Göster", $errors, [0=>'Hayır', 1=>'Evet'], isset($page->settings->show_content) ? $page->settings->show_content : 0) !!}
        </div>
    </fieldset>
</div>

<div class="row">
    <fieldset>
        <legend>Sayfa Listeleme Ayarları</legend>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_page]", "Alt Sayfaları göster", $errors, [0=>'Hayır', 1=>'Evet'], isset($page->settings->list_page) ? $page->settings->list_page : 0) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_per_page]", "Sayfalama", $errors, array(''=>'Seçiniz') + array_combine(range(1, 20, 1), range(1, 20, 1)), isset($page->settings->list_per_page) ? $page->settings->list_per_page : 6) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_type]", "Liste Türü", $errors, ['grid'=>'Grid', 'list'=>'Liste'], isset($page->settings->list_type) ? $page->settings->list_type : 6) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_grid]", "Grid", $errors, array(''=>'Seçiniz') + array_combine(range(1, 12, 1), range(1, 12, 1)), isset($page->settings->list_grid) ? $page->settings->list_grid : 6) !!}
        </div>
    </fieldset>
</div>

<div class="row">
    <fieldset>
        <legend>Video Ayarları</legend>
        <div class="col-md-12">
            {!! Form::label("settings.embed_video", "Video") !!}
            {!! Form::input('text', 'settings[embed_video]', !isset($page->settings->embed_video) ? '' : $page->settings->embed_video, ['class'=>'form-control']) !!}
            {!! $errors->first("settings.embed_video", '<span class="help-block">:message</span>') !!}
        </div>
    </fieldset>
</div>