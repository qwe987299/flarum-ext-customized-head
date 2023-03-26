@extends('flarum.admin::layouts.admin')

@section('content')
    <div class="container">
        <div class="Form-group">
            {{ Form::textarea('custom_head_code', $headCode, ['class' => 'FormControl', 'rows' => 5, 'placeholder' => 'Enter custom code to add to <head>']) }}
        </div>
    </div>
@endsection
