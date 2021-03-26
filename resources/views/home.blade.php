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

                    <form style="padding: .5rem 4rem; font-size: 2rem;" action="{{ url('/usuarios/index') }}">
                        <input type="submit" class="btn-large btn-outline-info" value="Usuarios" />
                    </form>

                    <form style="padding: .5rem 4rem; font-size: 2rem;" action="https://play.google.com/store">
                        <input type="submit" class="btn-large btn-outline-info" value="Tinacos" />
                    </form>

                    <form style="padding: .5rem 4rem; font-size: 2rem;" action="https://play.google.com/store">
                        <input type="submit" class="btn-large btn-outline-info" value="Consumo" />
                    </form>

                    <!-- <a href="{{ url('/tinaco') }}">
                        <div style="width: 600px; height: 50px; border: 1px solid #000; margin-top: 15px; justify-content: center; align-items: center;  display: flex">
                            <p style="font-size: 18px">Tinacos</p>
                        </div>
                    </a>

                    <a href="{{ url('/consums') }}">
                        <div style="width: 600px; height: 50px; border: 1px solid #000; margin-top: 15px; justify-content: center; align-items: center;  display: flex">
                            <p style="font-size: 18px">Consumo</p>
                        </div> -->
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
