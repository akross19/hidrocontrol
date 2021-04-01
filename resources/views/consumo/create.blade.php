@extends('layouts.app')

@section('content')
<div class="container" style="background-color: #fff;">
    <h3>Añadir registro</h3>
    <form class="needs-validation" novalidate method="POST" action="{{ url('/consumo/store') }}">
        {{ @csrf_field() }}
        <div class="form-row">
            <div class="col-md-8">
                <label>Cantidad de agua (mL)</label>
                <input type="number" id="cantidadAgua" name="cantidadAgua" class="form-control" placeholder="300">
            </div>
            <div class="col-md-8" style="margin-top: 25px; margin-bottom: 25px;">
                <button type="submit" class="btn btn-outline-success">Añadir Registro</button>
                <button type="button" class="btn btn-outline-danger" onclick="location.href='{{ url('consumo/index') }}'">Cancelar</button>
            </div>
        </div>
    </form>
</div>
@endsection