@extends('layouts.app')
@section('content')

<div class="container">
    <h3>Editar Usuario</h3>
    @foreach($cliente as $cliente)
    <form class="needs-validation" novalidate method="POST" action="{{ action('App\Http\Controllers\ClienteController@update', $cliente->id) }}">
        {{ method_field('PUT') }}
        {{ @csrf_field() }}
        <div class="form-row">
            <div class="col-md-8">
                <label for="validationCustom01">Nombre</label>
                <input  type="text" name="nombre" class="form-control" id="validationCustom01" placeholder="Cliente"  value="{{ $cliente->nombre }}" required>
                <div class="valid-feedback">
                    OK
                </div>
                <div class="invalid-feedback">
                    Ingresa el nombre del cliente.
                </div>
            </div>
        </div>
        <a href="index" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-success">Editar cliente</button>
    </form>
    @endforeach
</div>
@endsection