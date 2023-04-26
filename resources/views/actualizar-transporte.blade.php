@extends('plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidot')
    <div class="card">
        <h5 class="card-header">Actualizar nuevo transporte</h5>
        <div class="card-body">
            <p class="card-text">

            <form action="{{ route('transportes.updatet', $transportes->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for="">id</label>
                <input type="text" name="id" class="form-control" required value="{{$transportes->id}}">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$transportes->nombre}}">
                <label for="">Razón Social</label>
                <input type="text" name="razon_social" class="form-control" required value="{{$transportes->razon_social}}">

                <br>
                <a href="{{ route("transportes.indext") }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-warning">
                    <span class="fas fa-user-edit"></span>  Actualizar
                </button>

            </form>

            </p>

        </div>
    </div>

@endsection
