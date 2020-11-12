<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

@extends('layouts.app')
@section('content')

<body>
    <div class="container">
        <h3>Envíos realizados<h3/>
        <table class="table table-striped table-sm">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Informe</th>
                <th scope="col">Confirmación</th>
                <th scope="col">Grado</th>
                <th scope="col">Eliminar</th>

            </tr>
            </thead>
            <tbody id="myTable">
                @foreach($datos as $dato)
                    <tr>
                        <th scope="row">{!! $dato->id !!}</th>
                        <td scope="row">{!! $dato->informe !!}</td>
                        <td scope="row">{!! $dato->confirmacion !!}</td>
                        <td scope="row">{!! $dato->grado !!}</td>
                        <td>
                            <a href="/Eliminar/{{$dato->id}}" class="btn btn-primary">
                                Eliminar
                            </a>
                        <td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

@endsection

@if ($message = Session::get('exito'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif