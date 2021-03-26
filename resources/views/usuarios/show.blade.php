@extends('layouts.app')
@section('content')

<div class="container">
    <h3>Usuarios</h3>
    @foreach($usuarios as $usuario)
        <p>{{ $usuario->nombre }}</p>
    @endforeach
</div>
@endsection