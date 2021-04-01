@extends('layouts.app')

@section('content')
<div class="container" style="background-color: #fff;">
  <h3>Usuarios App</h3>
  <button type="button" class="btn btn-outline-danger" onclick="location.href='{{ url('/home') }}'">Volver a Panel Administrador</button>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Usuario</th>
        <th scope="col">Tipo de usuario</th>
        <th scope="col">Estado</th>
        <th scope="col" colspan="2">Opciones</th>
        <th scope="col"><button type="button" class="btn btn-outline-success" onclick="location.href='{{ url('usuarios/create') }}'">Añadir usuario</button></th>
      </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
      <tr>
        <th scope="row">{{ $usuario->id_usuario }}</th>
        <td>{{ $usuario->usuario }}</td>
        <td>{{ $usuario->tipo_usuario }}</td>
        <td>{{ $usuario->estado }}</td>
        <td><button type="button" class="btn btn-outline-info" onclick="location.href='{{ url('usuarios/show/'.$usuario->id_usuario) }}'">Ver</button></td>
        <td><button type="button" class="btn btn-outline-warning" onclick="location.href='{{ url('usuarios/edit/'.$usuario->id_usuario) }}'">Editar</button></td>
        <td>
          <form method="POST" action="{{ action('UsuarioController@destroy', $usuario->id_usuario) }}">
            {{ method_field('DELETE') }}
            {{ @csrf_field() }}
            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('¿Está seguro de eliminar?')">Eliminar</button>
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection