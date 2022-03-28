@extends('layouts.plantillabase')

@section('content')
<h2>EDITAR REGISTROS</h2>
<form action="/materias/{{$materia->id}}" method="POST">
    @csrf
    @method('PUT')
<div class="mb-3">
     <label for="" class="form-label">ID</label>
     <input id="id" name="id" type="number" class="form-control" value="{{$materia->id}}">
</div>
<div class="mb-3">
     <label for="" class="form-label">Nombre</label>
     <input id="nombre" name="nombre" type="text" class="form-control" value="{{$materia->nombre}}">
</div>
<a href="/materias" class="btn btn-secondary">Cancelar</a>
<button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection