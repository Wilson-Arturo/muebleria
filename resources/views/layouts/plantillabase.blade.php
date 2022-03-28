@extends('adminlte::page')
@yield('css')
@section('title', 'Dashboard')



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
@yield('js')