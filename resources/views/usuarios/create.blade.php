@extends('layouts.app')
@section('content')

<div class="container">
    <h3>Crear Usuario</h3>
    <form class="needs-validation" novalidate method="POST" action="{{ url('/usuarios/store') }}">
        {{ @csrf_field() }}
        <div class="form-row">
            <div class="col-md-8">
                <label for="validationCustom01">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="validationCustom01" placeholder="producto">
                <div class="valid-feedback">
                    OK!
                </div>
                <div class="invalid-feedback">
                    Ingresa el nombre del cliente.
                </div>
            </div>
            <button type="submit" class="btn btn-outline-success">Añadir Cliente</button>
        </div>
    </form>
</div>
@endsection