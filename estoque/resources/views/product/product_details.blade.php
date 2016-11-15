@extends('layout.principal')

@section('conteudo')
	<h1>Detalhes do produto  {{ $product->nome }}</h1>
	<ul>
		<li>
			<b>Valor:</b> {{ $product->valor }}
		</li>
		<li>
			<b>Descrição:</b>  {{ $product->descricao }}
		</li>
		<li>
			<b>Quantidade:</b>  {{ $product->quantidade }}
		</li>
	</ul>
@stop
