@extends('layouts.plantillabase')

@section('css')
<link href="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js" rel="stylesheet">
@endsection

@section('content')
<br>
<a href="materias/create" class="btn btn-primary mb-3">CREAR</a>
<table id="materias" class="table table-striped table bordered shadow-g mt-4 " style="width:100%">
<thead class="bg-primary text-white">
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
    </tr>
</thead>
<tbody>
    @foreach ($materias as $materia)
<tr>
    <td>{{ $materia->id}}</td>
    <td>{{ $materia->nombre}}</td>
    <td>
         <form action="{{ route ('materias.destroy',$materia->id)}}" method="POST">
         <a href="/materias/{{ $materia->id}}/edit" class="btn btn-info">Editar</a>
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-danger">Borrar</button>
        </form>
    </td>
</tr>
    @endforeach
</tbody>
</table>
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
    $('#materias').DataTable({
        "lengthMenu": [[5,10, 50,-1], [5,10, 50, "All"]]
    });
} );
</script>
@endsection
@endsection