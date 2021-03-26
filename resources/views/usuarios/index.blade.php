@extends('layouts.app')
@section('content')

<div class="container">
  <h3>Usuarios</h3>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col" colspan="3">Opciones</th>
        <th scope="col"><button type="button" class="btn btn-outline-warning" onclick="location.href='{{ url('usuarios/create') }}'">Añadir usuario</button></th>
      </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
      <tr>
        <th scope="row">{{ $loop->index }}</th>
        <td>{{ $usuario->usuario }}</td>
        <td>{{ $usuario->tipo_usuario }}</td>
        <td>{{ $usuario->estado }}</td>
        <td><button type="button" class="btn btn-outline-info" onclick="location.href='{{ url('usuarios/show/'.$usuario->id) }}'">Ver</button></td>
        <td><button type="button" class="btn btn-outline-warning" onclick="location.href='{{ url('usuarios/edit/'.$usuario->id) }}'">Editar</button></td>
        <td>
          <form method="POST" action="{{ action('App\Http\Controllers\usuarioController@destroy', $usuario->id) }}">
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