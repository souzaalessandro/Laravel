@extends('layout.principal')

@section('conteudo')
    <h1>New Product</h1>
    <form action="/produtos/adiciona">
        <div class="form-group">
            <label>ProductName</label>
            <input name="productName" class="form-control">
        </div>

        <div class="form-group">
            <label>UnitPrice</label>
            <input name="unitPrice" type="number" class="form-control">
        </div>
        <div class="form-group">
            <label>UnitsInStock</label>
            <input name="unitInStock" type="number" class="form-control">
        </div>
        <button class="btn btn-success" type="submit">Salvar</button>
    </form>
@stop