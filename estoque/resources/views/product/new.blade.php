@extends('layout.principal')

@section('conteudo')
  <form action="/product/add_product" method="post">
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
    <div class="form-group">
      <label>
        Nome:
      </label>
      <input name="name" class="form-control" />
      <label>
        Valor:
      </label>
      <input name="value" class="form-control" />
      <label>
        Quantidade:
      </label>
      <input name="quantity" class="form-control" />
      <label>
        Descrição:
      </label>
      <textarea name="description" class="form-control">
      </textarea>
      <br>
      <!--<input type="button" class="btn btn-primary" value="Salvar"/>-->
      <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </form>
@stop
