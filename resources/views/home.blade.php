@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel Administrador</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido {{ Auth::user()->name }}
                    
                    <div style="margin-top: 24px" class="row">
                        <button type="button" class="btn-large btn-outline-info" onclick="location.href='{{ url('usuarios/index') }}'"><img src="{{asset('images/ic_usuarios.png')}}" width="64" height="64"><br>Usuarios App<br><span class="subtext">Añadir, editar o eliminar<p>usuarios de la aplicación.</p></span></button>

                        <button type="button" class="btn-large btn-outline-info" onclick="location.href='{{ url('tinacos/index') }}'"><img src="{{asset('images/ic_tinacos.png')}}" width="64" height="64"><br>Tinacos<br><span class="subtext">Añadir, editar o eliminar<p>tinacos.</p></span></button>

                        <button type="button" class="btn-large btn-outline-info" onclick="location.href='{{ url('consumo/index') }}'"><img src="{{asset('images/ic_consumo.png')}}" width="64" height="64"><br>Consumo<br><span class="subtext">Añadir, editar o eliminar<p>consumo.</p></span></button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
