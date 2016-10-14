@extends('layouts.master')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Create New Post</div>
<div class="panel-body">

@if ($errors->any())
<ul class="alert alert-danger">
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif

{!! Form::open(['url' => '/admin/posts', 'class' => 'form-horizontal', 'files' => true]) !!}


   <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
{!! Form::label('title', 'Title', ['class' => 'col-md-12 control-label']) !!}
<div class="col-md-12">
{!! Form::text('title', null, ['class' => 'form-control']) !!}
{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
{!! Form::label('Body', 'Body', ['class' => 'col-md-12 control-label']) !!}
<div class="col-md-12">
{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
{!! $errors->first('body', '<p class="help-block">:message</p>') !!}
</div>
</div>
<script type="text/javascript">CKEDITOR.replace( 'body'); </script>

<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
{!! Form::label('Description', 'description', ['class' => 'col-md-12 control-label']) !!}
<div class="col-md-12">
{!! Form::text('description', null, ['class' => 'form-control']) !!}
{!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group {{ $errors->has('created_at') ? 'has-error' : ''}}">
{!! Form::label('created_at', 'created_at', ['class' => 'col-md-12 control-label']) !!}
<div class="col-md-12">
{!! Form::date('created_at', null, ['class' => 'form-control']) !!}
{!! $errors->first('created_at', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">

{!! Form::label('Images', 'Images', ['class' => 'col-md-12 control-label']) !!}
<div class="col-md-12">
{!! Form::file('images', null, ['class' => 'form-control']) !!}
{!! $errors->first('images', '<p class="help-block">:message</p>') !!}


</div>
</div>

<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
{!! Form::label('category', 'Category', ['class' => 'col-md-12 control-label']) !!}
<div class="col-md-12">
{!! Form::select('category', ['News'], null, ['class' => 'form-control']) !!}
{!! $errors->first('category', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
{!! Form::label('Slug', 'Slug', ['class' => 'col-md-12 control-label']) !!}
<div class="col-md-12">
{!! Form::text('slug', null, ['class' => 'form-control']) !!}
{!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
{!! Form::close() !!}

</div>
</div>
</div>
</div>
</div>
@endsection