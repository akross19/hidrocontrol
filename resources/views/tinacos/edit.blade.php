@extends('layouts.app')

@section('content')
<div class="container" style="background-color: #fff;">
    <h3>Editar tinaco</h3>
    @foreach($tinaco as $tinaco)
    <form class="needs-validation" novalidate method="POST" action="{{ action('TinacoController@update', $tinaco->id_tinaco) }}">
        {{ method_field('PUT') }}
        {{ @csrf_field() }}
        <div class="form-row">
            <div class="col-md-8">
                <label>Cantidad de agua actual en el tinaco (mL)</label>
                <input type="number" id="cantidadAgua" name="cantidadAgua" class="form-control" placeholder="300" value="{{ $tinaco->cant_agua_actual }}">
            </div>
            <div class="col-md-8" style="margin-top: 25px; margin-bottom: 25px;">
                <button type="submit" class="btn btn-outline-success">Editar Tinaco</button>
                <button type="button" class="btn btn-outline-danger" onclick="location.href='{{ url('tinacos/index') }}'">Cancelar</button>
            </div>
        </div>
    </form>
    @endforeach
</div>
@endsection