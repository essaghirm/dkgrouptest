@extends('layout')

@section('header')
@parent
@endsection


@section('content')

<div class="row">
	<div class="col page-header">
		<h1>Contactez-nous</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col form">
			@include('inc.alerts')
			{!! Form::open(['action' => 'MessagesController@store', 'method' => 'POST']) !!}
			<div class="form-group">
				{{ Form::text('subject', '', ['class' => 'form-control', 'placeholder' => 'Sujet']) }}
				@error('subject')
				<p class="error-message">{{ $message }}</p>
				@enderror
			</div>
			<div class="form-group">
				{{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'E-mail']) }}
				@error('email')
				<p class="error-message">{{ $message }}</p>
				@enderror
			</div>
			<div class="form-group">
				{{ Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description']) }}
				@error('description')
				<p class="error-message">{{ $message }}</p>
				@enderror
			</div>
			{{ Form::submit('Envoyer', ['class' => 'btn btn-dark btn-lg btn-block']) }}
			{!! Form::close() !!}
		</div>
	</div>
</div>

@endsection