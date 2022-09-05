@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Productos</div>

                <div class="card-body">

                     
                    <br>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Categoria</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                            <tr>
                                <th scope="row"> {{$producto->id}}</th>
                                <td>{{$producto->nombre}}</td>
                                <td>{{$producto->precio}}</td>
                                <td> {{$producto->categoria}}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{$productos->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection