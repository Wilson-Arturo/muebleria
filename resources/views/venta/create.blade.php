@extends('layouts.plantillabase')

@section('content')
<h2>CREAR REGISTROS</h2>

<form action="/productos" method="POST">
    @csrf
<div class="mb-3">
     <label for="" class="form-label">ID Productos</label>
     <input id="id" name="id" type="number" class="form-control" tabindex="1">
</div>
<div class="mb-3">
     <label for="" class="form-label">ID Categoria</label>
     <input id="id_categoria" name="id_categoria" type="number" class="form-control" tabindex="2">
</div>
<div class="mb-3">
     <label for="" class="form-label">Nombre</label>
     <input id="nombre" name="nombre" type="text" class="form-control" tabindex="3">
</div>
<div class="mb-3">
     <label for="" class="form-label">Costo</label>
     <input id="costo" name="costo" type="number" class="form-control" tabindex="4">
</div>
<div class="mb-3">
     <label for="" class="form-label">Descripcion</label>
     <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="5">
</div>
<div class="mb-3">
     <label for="" class="form-label">Codigo de Barras</label>
     <input id="codigo_barras" name="codigo_barras" type="number" class="form-control" tabindex="6">
</div>
<div class="mb-3">
     <label for="" class="form-label">Stock</label>
     <input id="stock" name="stock" type="number" class="form-control" tabindex="7">
</div>
<a href="/productos" class="btn btn-secondary" tabindex="9">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
</form>

@endsection