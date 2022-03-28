@extends('layouts.plantillabase')

@section('content')
<h2>CREAR REGISTROS</h2>

<form action="/materias" method="POST">
    @csrf
<div class="mb-3">
     <label for="" class="form-label">ID</label>
     <input id="id" name="id" type="number" class="form-control" tabindex="1">
</div>
<div class="mb-3">
     <label for="" class="form-label">Nombre</label>
     <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
</div>
<a href="/materias" class="btn btn-secondary" tabindex="4">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
</form>

@endsection