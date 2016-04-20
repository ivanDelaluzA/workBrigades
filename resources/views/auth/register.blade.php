@extends('layouts.masterComplete')

@section('title', 'Registro')

@section('content')

{!! Form::open(['url' => 'auth/register']) !!}

		{!! Form::label('name','Nombre') !!}
		{!! Form::text('name') !!}
		<br>

		{!! Form::label('email','Email') !!}
		{!! Form::Email('email') !!}
		<br>
		{!! Form::label('password','Password') !!}
		{!! Form::password('password') !!}
		<br>

		{!! Form::label('password_confirmation','Password Confirmation') !!}
		{!! Form::password('password_confirmation') !!}
		<br>


		{!! Form::submit('Iniciar secion') !!}
{!! Form::close() !!}

@stop