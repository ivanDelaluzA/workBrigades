@extends('layouts.masterComplete')

@section('title', 'login')

@section('content')


@if (count($errors)>0)
	<ul>
		@foreach ($errors->all() as $error)
			<li><strong>{{  $error }}</strong></li>
		@endforeach
	</ul>
	{{-- expr --}}
@endif



{!! Form::open(['url' => '/auth/login']) !!}

		<br>

		{!! Form::label('email','Email') !!}
		{!! Form::Email('email') !!}
		<br>
		{!! Form::label('password','Password') !!}
		{!! Form::password('password') !!}
		<br>
		{!! Form::label('remenber','No cerrar Secion') !!}
		{!! Form::checkbox('remenber') !!}
		<br>

		{!! Form::submit('Iniciar secion') !!}
{!! Form::close() !!}

@stop