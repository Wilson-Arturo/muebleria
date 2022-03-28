@extends('layouts.plantillabase')
@section('css')
<link href="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js" rel="stylesheet">
@endsection

@section('content')
<br>
<a href="salons/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
    </tr>
</thead>
<tbody>
    @foreach ($salons as $salon)
<tr>
    <td>{{ $salon->id}}</td>
    <td>{{ $salon->nombre}}</td>
    <td>
         <form action="{{ route ('salons.destroy',$salon->id)}}" method="POST">
         <a href="/salons/{{ $salon->id}}/edit" class="btn btn-info">Editar</a>
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
    $('#articulos').DataTable({
        "lengthMenu": [[5,10, 50,-1], [5,10, 50, "All"]]
    });
} );
</script>
@endsection
@endsection