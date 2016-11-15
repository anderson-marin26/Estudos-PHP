@extends('layout.principal')

@section('conteudo')

	@if(empty($products))
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
					foreach($products as $product) :
				?>
				<tr class="{{ $product->quantidade <= 2 ? 'danger' : '' }}">
					<td>{{ $product->nome }}</td>
					<td>{{ $product->valor }}</td>
					<td>{{ $product->descricao }}</td>
					<td>{{ $product->quantidade }}</td>
					<td>
						<a href="/product/details/<?= $product->id ?>">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						</a>
					</td>
				</tr>
				<?php
					endforeach
				?>
			</tbody>
		</table>
		@if(old('name'))
			<span class="alert alert-success">
				Produto {{ old('name') }} adicionado com sucesso!
			</span>
		@endif
	@endif
@stop
