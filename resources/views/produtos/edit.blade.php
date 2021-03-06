@extends('layout')

@section('content')
	<h1>Editando o Produto</h1>
	@if ($errors->any())
		<ul class="alert alert-warning">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['url'=> ['produtos/update', $produto->id], 'method'=>'put']) !!}

		<!-- Nome Form Input -->
		<div class="form-group">
			{!! Form::label('nome', 'Nome:') !!}
			{!! Form::text('nome', $produto->nome, ['class'=>'form-control']) !!}
		</div>

		<!-- Descricao Form Input -->
		<div class="form-group">
			{!! Form::label('descricao', 'Descrição:') !!}
			{!! Form::textarea('descricao', $produto->descricao, ['class'=>'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::submit('Alterar Produto', ['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection