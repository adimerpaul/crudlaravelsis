@extends('layout.index');
@section('content')
    <div class="container">
        <form method="post" action="{{route('libros.update',$libro->id)}}" role="form">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            <div class="form-group row">
                <label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$libro->titulo}}" name="titulo" id="titulo" placeholder="Titulo">
                </div>
            </div>
            <div class="form-group row">
                <label for="autor" class="col-sm-2 col-form-label">Autor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$libro->autor}}" name="autor" id="autor" placeholder="Autor">
                </div>
            </div>
            <div class="form-group row">
                <label for="precio" class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" value="{{$libro->precio}}" name="precio" id="precio" placeholder="Precio">
                </div>
            </div>
        </form>
    </div>
@endsection
