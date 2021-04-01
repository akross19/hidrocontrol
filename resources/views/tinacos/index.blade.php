@extends('layouts.app')

@section('content')
<div class="container" style="background-color: #fff;">
  <h3>Tinacos</h3>
  <button type="button" class="btn btn-outline-danger" onclick="location.href='{{ url('/home') }}'">Volver a Panel Administrador</button>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Agua actual en el tinaco (mL)</th>
        <th scope="col">Opciones</th>
        <th scope="col"><button type="button" class="btn btn-outline-success" onclick="location.href='{{ url('tinacos/create') }}'">Añadir tinaco</button></th>
      </tr>
    </thead>
    <tbody>
    @foreach($tinacos as $tinaco)
      <tr>
        <th scope="row">{{ $tinaco->id_tinaco }}</th>
        <td>{{ $tinaco->cant_agua_actual }}</td>
        <td><button type="button" class="btn btn-outline-warning" onclick="location.href='{{ url('tinacos/edit/'.$tinaco->id_tinaco) }}'">Editar</button></td>
        <td>
          <form method="POST" action="{{ action('TinacoController@destroy', $tinaco->id_tinaco) }}">
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