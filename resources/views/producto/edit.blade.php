@extends('layouts.plantillabase')

@section('content')
<h2>CREAR REGISTROS</h2>

<form action="/estudiantes/{{$estudiante->id}}" method="POST">
    @csrf
    @method('PUT')
<div class="mb-3">
     <label for="" class="form-label">ID</label>
     <input id="id" name="id" type="number" class="form-control" value="{{$estudiante->id}}">
</div>
<div class="mb-3">
     <label for="" class="form-label">Matricula</label>
     <input id="matricula" name="matricula" type="text" class="form-control" value="{{$estudiante->matricula}}">
</div>
<div class="mb-3">
     <label for="" class="form-label">Nombre</label>
     <input id="nombre" name="nombre" type="text" class="form-control" value="{{$estudiante->nombre}}">
</div>
<div class="mb-3">
     <label for="" class="form-label">Apellido Paterno</label>
     <input id="apellido_paterno" name="apellido_paterno" type="text" class="form-control" value="{{$estudiante->apellido_paterno}}">
</div>
<div class="mb-3">
     <label for="" class="form-label">Apellido Materno</label>
     <input id="apellido_materno" name="apellido_materno" type="text" class="form-control" value="{{$estudiante->apellido_materno}}">
</div>
<a href="/estudiantes" class="btn btn-secondary" tabindex="7">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>

@endsection