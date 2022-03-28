@extends('layouts.plantillabase')

@section('content')
<h2>CREAR REGISTROS</h2>

<form action="/estudiantes" method="POST">
    @csrf
<div class="mb-3">
     <label for="" class="form-label">ID</label>
     <input id="id" name="id" type="number" class="form-control" tabindex="1">
</div>
<div class="mb-3">
     <label for="" class="form-label">Matricula</label>
     <input id="matricula" name="matricula" type="text" class="form-control" tabindex="2">
</div>
<div class="mb-3">
     <label for="" class="form-label">Nombre</label>
     <input id="nombre" name="nombre" type="text" class="form-control" tabindex="3">
</div>
<div class="mb-3">
     <label for="" class="form-label">Apellido Paterno</label>
     <input id="apellido_paterno" name="apellido_paterno" type="text" class="form-control" tabindex="4">
</div>
<div class="mb-3">
     <label for="" class="form-label">Apellido Materno</label>
     <input id="apellido_materno" name="apellido_materno" type="text" class="form-control" tabindex="5">
</div>
<a href="/estudiantes" class="btn btn-secondary" tabindex="7">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>

@endsection