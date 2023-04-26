@extends('plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidot')
    <div class="card">
        <h5 class="card-header">Agregar nuevo transporte</h5>
        <div class="card-body">

            <p class="card-text">
            <form action="{{ route('transportes.storet') }}" method="POST">
                @csrf
                <label for="">Id</label>
                <input type="text" name="id" class="form-control" required>
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Razón Social</label>
                <input type="text" name="razon_social" class="form-control" required>
                {{--                <label for="">Fecha</label>--}}
                {{--                <input type="date" name="fecha" class="form-control" required>--}}
                <br>
                <a href="{{ route("transportes.indext") }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span>Agregar
                </button>

            </form>

            </p>

        </div>
    </div>

@endsection

