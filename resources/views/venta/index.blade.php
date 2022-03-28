@extends('layouts.plantillabase')

@section('css')
<link href="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js" rel="stylesheet">
@endsection

@section('content')
<br>
<a href="productos/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
        <th scope="col">ID Productos</th>
        <th scope="col">ID Categorias</th>
        <th scope="col">Nombre</th>
        <th scope="col">Costo</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Codigo_barras</th>
        <th scope="col">Stock</th>
    </tr>
</thead>
<tbody>
    @foreach ($productos as $producto)
<tr>
    <td>{{ $producto->id_productos}}</td>
    <td>{{ $producto->id_categoria}}</td>
    <td>{{ $producto->nombre}}</td>
    <td>{{ $producto->costo}}</td>
    <td>{{ $producto->descripcion}}</td>
    <td>{{ $producto->codigo_barras}}</td>
    <td>{{ $producto->stock}}</td>
    <td>
         <form action="{{ route ('productos.destroy',$producto->id_productos)}}" method="POST">
         <a href="/productos/{{ $producto->id_productos}}/edit" class="btn btn-info">Editar</a>
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