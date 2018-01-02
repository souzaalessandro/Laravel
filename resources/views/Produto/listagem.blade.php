@extends('layout.principal')
@section('conteudo')
@if(empty($produtos))
        <div> Sem produtos para listar </div>
@else
<div class="container">
 <h1>Listagem de produtos</h1>
    <table class="table table-striped table-bordered table-rover">
        @foreach ($produtos as $produto)
        <tr class="{{$produto->UnitsInStock<=5?'danger':''}}">

            <td> {{ $produto->ProductName }}</td>
            <td> {{ $produto->UnitPrice }}</td>
            <td> {{$produto->UnitsInStock }}</td>
            <td> <a href="/produtos/mostra/{{ $produto->ProductID}}">
                  <?php echo FA::icon('eye')?> </a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endif
<h4>
  <span class="label label-danger pull-right">
    Itens com estoque a baixo do esperado
  </span>
</h4>
@stop

