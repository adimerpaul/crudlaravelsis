@extends('layout.index');
@section('content')
    <a href="{{route('libros.create')}}" class="btn btn-success">Crear</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Precio</th>
            <th scope="col">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($libros as $libro)
        <tr>
            <th scope="row">{{$libro->id}}</th>
            <td>{{$libro->titulo}}</td>
            <td>{{$libro->autor}}</td>
            <td>{{$libro->precio}}</td>
            <td>
                <a href="{{action('bookController@show',$libro->id)}}" class="btn btn-info">ver</a>
                <a href="{{action('bookController@edit',$libro->id)}}" class="btn btn-warning">Editar</a>
                <form action="{{action('bookController@destroy',$libro->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('delete')}}
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
