@extends('layouts.app')

@section('content')
<div class="container" style="background-color: #fff;">
  <h3>Consumo</h3>
  <button type="button" class="btn btn-outline-danger" onclick="location.href='{{ url('/home') }}'">Volver a Panel Administrador</button>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Cantidad de agua (mL)</th>
        <th scope="col">Fecha de registro</th>
        <th scope="col">Opciones</th>
        <th scope="col"><button type="button" class="btn btn-outline-success" onclick="location.href='{{ url('consumo/create') }}'">Añadir registro</button></th>
      </tr>
    </thead>
    <tbody>
    @foreach($consumo as $consumo)
      <tr>
        <th scope="row">{{ $consumo->id_registro }}</th>
        <td>{{ $consumo->cant_agua }}</td>
        <td>{{ $consumo->fecha }}</td>
        <td><button type="button" class="btn btn-outline-warning" onclick="location.href='{{ url('consumo/edit/'.$consumo->id_registro) }}'">Editar</button></td>
        <td>
          <form method="POST" action="{{ action('ConsumoController@destroy', $consumo->id_registro) }}">
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