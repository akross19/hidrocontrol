@extends('layouts.app')

@section('content')
<div class="container" style="background-color: #fff;">
    <h3>Editar usuario</h3>
    @foreach($usuario as $usuario)
    <form class="needs-validation" novalidate method="POST" action="{{ action('UsuarioController@update', $usuario->id_usuario) }}">
        {{ method_field('PUT') }}
        {{ @csrf_field() }}
        <div class="form-row">
            <div class="col-md-8">
                <label>Correo Electrónico</label>
                <input type="email" id="usuario" name="usuario" class="form-control" placeholder="User@gmail.com" value="{{ $usuario->usuario }}">
                <label style="margin-top: 15px;">Contraseña</label>
                <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="xxxxxxxx" value="{{ $usuario->contrasena }}">
                <label style="margin-top: 15px;">Tipo de usuario</label>
                <select id="tipoUsuario" name="tipoUsuario">
                    <option value="Administrador">Administrador</option>
                    <option value="Normal">Normal</option>
                </select>
                <br>
                <label style="margin-top: 15px;">Estado</label>
                <select id="estado" name="estado">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>
            <div class="col-md-8" style="margin-top: 25px; margin-bottom: 25px;">
                <button type="submit" class="btn btn-outline-success">Editar Usuario</button>
                <button type="button" class="btn btn-outline-danger" onclick="location.href='{{ url('usuarios/index') }}'">Cancelar</button>
            </div>
        </div>
    </form>
    @endforeach
</div>
@endsection