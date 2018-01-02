@extends('layout.principal')
@section('conteudo')
<div class="container">
        <div class="form-group">
            <label for="Product Name">Product Name</label>
            <input type="text" class="form-control" id="productName" placeholder="{{ $p->ProductName }}" >
        </div>
        <div class="form-group">
            <label for="Category">Category</label>
            <input type="text" class="form-control" id="Category" placeholder="{{ $p->CategoryName }}" >
        </div>
        <div class="form-group">
            <label for="CategoryDescription">Category Description</label>
            <input type="text" class="form-control" id="CategoryDescription" placeholder="{{ $p->Description }}" >
        </div>
</div>
@stop