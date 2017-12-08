@extends('layouts.admin')

@section('content')

    <h1>Edit Users</h1>
    <div class="row">
        <div class="col-sm-3">
            <img class="img-responsive" src="{{ $user->photo ? $user->photo->file : "/images/place_holder.jpg" }}" alt="">
        </div>
        <div class="col-sm-9">
            {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::email('email', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('role_id', 'Role:') !!}
                    {!! Form::select('role_id', [''=>'Choose one option'] + $roles, null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('is_active', 'Status:') !!}
                    {!! Form::select('is_active', ['1'=>'Active', '0'=>'Not Active'], null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password:') !!}
                    {!! Form::password('password', ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::file('photo_id', ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        @include('includes.form_errors')
    </div>
    
@endsection