@extends('layouts.plantillabase')

@section('content')
<h2>CREAR REGISTROS</h2>

<form action="/productos/{{$producto->id}}" method="POST">
    @csrf
    @method('PUT')
<div class="mb-3">
     <label for="" class="form-label">ID</label>
     <input id="id" name="id" type="number" class="form-control" value="{{$producto->id}}">
</div>
<div class="mb-3">
     <label for="" class="form-label">ID Categoria</label>
     <input id="id_categoria" name="id_categoria" type="number" class="form-control" value="{{$producto->id_categoria}}">
</div>
<div class="mb-3">
     <label for="" class="form-label">Nombre</label>
     <input id="nombre" name="nombre" type="text" class="form-control" value="{{$producto->nombre}}">
</div>
<div class="mb-3">
     <label for="" class="form-label">Costo</label>
     <input id="costo" name="costo" type="text" class="form-control" value="{{$producto->costo}}">
</div>
<div class="mb-3">
     <label for="" class="form-label">Descripcion</label>
     <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$producto->descripcion}}">
</div>
<div class="mb-3">
     <label for="" class="form-label">Codigo de barras</label>
     <input id="codigo_barras" name="codigo_barras" type="text" class="form-control" value="{{$producto->codigo_barras}}">
</div>
<div class="mb-3">
     <label for="" class="form-label">Stock</label>
     <input id="stock" name="stock" type="text" class="form-control" value="{{$producto->stock}}">
</div>
<a href="/productos" class="btn btn-secondary" tabindex="9">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
</form>

@endsection