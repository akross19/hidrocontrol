@extends('layouts.app')

@section('content')
<div class="container" style="background-color: #fff;">
    <h3>Añadir usuario</h3>
    <form class="needs-validation" novalidate method="POST" action="{{ url('/usuarios/store') }}">
        {{ @csrf_field() }}
        <div class="form-row">
            <div class="col-md-8">
                <label>Correo Electrónico</label>
                <input type="email" id="usuario" name="usuario" class="form-control" placeholder="User@gmail.com">
                <label style="margin-top: 15px;">Contraseña</label>
                <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="xxxxxxxx">
                <label style="margin-top: 15px;">Tipo de usuario</label>
                <select id="tipoUsuario" name="tipoUsuario">
                    <option value="Administrador">Administrador</option>
                    <option value="Normal">Normal</option>
                </select>
            </div>
            <div class="col-md-8" style="margin-top: 25px; margin-bottom: 25px;">
                <button type="submit" class="btn btn-outline-success">Añadir Usuario</button>
                <button type="button" class="btn btn-outline-danger" onclick="location.href='{{ url('usuarios/index') }}'">Cancelar</button>
            </div>
        </div>
    </form>
</div>
@endsection