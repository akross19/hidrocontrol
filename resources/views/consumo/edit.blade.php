@extends('layouts.app')

@section('content')
<div class="container" style="background-color: #fff;">
    <h3>Editar registro</h3>
    @foreach($consumo as $consumo)
    <form class="needs-validation" novalidate method="POST" action="{{ action('ConsumoController@update', $consumo->id_registro) }}">
        {{ method_field('PUT') }}
        {{ @csrf_field() }}
        <div class="form-row">
            <div class="col-md-8">
                <label>Cantidad de agua (mL)</label>
                <input type="number" id="cantidadAgua" name="cantidadAgua" class="form-control" placeholder="300" value="{{ $consumo->cant_agua }}">
            </div>
            <div class="col-md-8" style="margin-top: 25px; margin-bottom: 25px;">
                <button type="submit" class="btn btn-outline-success">Editar Registro</button>
                <button type="button" class="btn btn-outline-danger" onclick="location.href='{{ url('consumo/index') }}'">Cancelar</button>
            </div>
        </div>
    </form>
    @endforeach
</div>
@endsection