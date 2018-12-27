@php
    $name  = $field['name'];
    $title = $field['title'];
    $class = isset($field['class']) ? $field['class'] : '';
@endphp

<div class="form-group{{ $errors->has("settings.".$name) ? ' has-error' : '' }}">
    {!! Form::label("settings.{$name}.{$locale}", $title."($locale) :") !!}
    {!! Form::textarea('settings['.$name.']['.$locale.']', old('settings.'.$name.'.'.$locale, $page->settings->{$name}->{$locale} ?? ''), ['class'=>'form-control '.$class, 'rows'=>5]) !!}
    {!! $errors->first("settings.'.$name.'.".$locale, '<span class="help-block">:message</span>') !!}
</div>