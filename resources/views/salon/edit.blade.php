@extends('layouts.plantillabase')

@section('content')
<h2>EDITAR REGISTROS</h2>
<form action="/salons/{{$salon->id}}" method="POST">
    @csrf
    @method('PUT')
<div class="mb-3">
     <label for="" class="form-label">ID</label>
     <input id="id" name="id" type="number" class="form-control" value="{{$salon->id}}">
</div>
<div class="mb-3">
     <label for="" class="form-label">Nombre</label>
     <input id="nombre" name="nombre" type="text" class="form-control" value="{{$salon->nombre}}">
</div>
<a href="/salons" class="btn btn-secondary">Cancelar</a>
<button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection