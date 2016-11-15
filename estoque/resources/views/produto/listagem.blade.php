@extends('layout.principal')

@section('conteudo')

	@if(empty($produtos))
		<div class="alert alert-danger">
			Nenhum produto encontrado!
		</div>
	@else
		<h1>Listagem de produtos</h1>
		<table class="table" style="text-align: center">
			<thead style="font-weight: bold">
				<tr>
					<td>
						Nome
					</td>
					<td>
						Valor
					</td>
					<td>
						Descrição
					</td>
					<td>
						Quantidade
					</td>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($produtos as $p) :
				?>
				<tr class="{{ $p->quantidade <= 2 ? 'danger' : '' }}">
					<td>{{ $p->nome }}</td>
					<td>{{ $p->valor }}</td>
					<td>{{ $p->descricao }}</td>
					<td>{{ $p->quantidade }}</td>
					<td>
						<a href="/produtos/mostra/<?= $p->id ?>">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						</a>
					</td>
				</tr>
				<?php
					endforeach
				?>
			</tbody>
		</table>
	@endif
@stop
