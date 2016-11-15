@extends('layout.principal')

@section('conteudo')
	<h1>Detalhes do produto  {{ $p->nome }}</h1>
	<ul>
		<li>
			<b>Valor:</b> {{ $p->valor }}
		</li>
		<li>
			<b>Descrição:</b>  {{ $p->descricao }}
		</li>
		<li>
			<b>Quantidade:</b>  {{ $p->quantidade }}
		</li>
	</ul>
@stop
