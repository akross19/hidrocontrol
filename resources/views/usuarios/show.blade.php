@extends('layouts.app')
@section('content')

<div class="container" style="background-color: #fff;">
    <h3>Datos del usuario</h3>
    <br>
    @foreach($usuario as $usuario)
        <p><b>ID:</b> {{ $usuario->id_usuario }}</p>
        <p><b>Usuario:</b> {{ $usuario->usuario }}</p>
        <p><b>Contraseña:</b> {{ $usuario->contrasena }}</p>
        <p><b>Tipo de usuario:</b> {{ $usuario->tipo_usuario }}</p>
        <p><b>Estado:</b> {{ $usuario->estado }}</p>
    @endforeach
    <br>
    <button style="margin-bottom: 25px;" type="button" class="btn btn-outline-danger" onclick="location.href='{{ url('usuarios/index') }}'">Volver</button>
</div>
@endsection