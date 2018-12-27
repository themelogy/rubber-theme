@php
    $name  = $field['name'];
    $title = $field['title'];
@endphp
<div class="form-group{{ $errors->has("settings.".$name) ? ' has-error' : '' }}">
    {!! Form::label("settings.{$name}.{$locale}", $title."($locale):") !!}
    {!! Form::input('text', 'settings['.$name.']['.$locale.']', old('settings.'.$name.'.'.$locale, $page->settings->{$name}->{$locale} ?? ''), ['class'=>'form-control']) !!}
    {!! $errors->first("settings.'.$name.'.".$locale, '<span class="help-block">:message</span>') !!}
</div>