@extends('layouts.admin')

@section('content')

    <h1>Create Posts</h1>
    {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Content:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id', [''=>'Choose one category', 1=>'PHP', 2=>'Laravel', 3=>'Bootstrap'], null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::file('photo_id', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
    
    @include('includes.form_errors')
    
@endsection