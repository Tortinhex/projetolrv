@extends('layout')

@section('content')
	<h1>Lista de Produtos</h1>

	<a href="{{ url('produtos/create') }}" class="btn btn-default">Novo Produto</a>
	<br>
	<br>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<th>ID</th>
			<th>Nome do Produto</th>
			<th>Descrição do Produto</th>
			<th>Ação</th>
		</thead>
		<tbody>
			@foreach($produtos as $produto)
				<tr>
					<td>{{ $produto->id }}</td>
					<td>{{ $produto->nome }}</td>
					<td>{{ $produto->descricao }}</td>
					<td>
						<a href="{{ url('produtos/destroy', ['id'=> $produto->id]) }}">
							<i class="fa fa-trash"></i> Remover
						</a>
						<a href="{{ url('produtos/edit', ['id'=> $produto->id]) }}">
							<i class="fa fa-pencil"></i> Editar
						</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection