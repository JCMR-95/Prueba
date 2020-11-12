
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

@extends('layouts.app')
@section('content')

<body>
<div class="container">
    <div class="form-row justify-content-center">
        <form action="enviarDatos" method="post">
            @csrf
            <div>
                <h5>¿Qué te gustaría que agregaramos al informe?</h5>
                <textarea name="informe" rows="10" cols="40" placeholder="Escriba su respuesta..."></textarea>
            </div>
            <div>
                <h5>¿La información es correcta?</h5>
                <select name="confirmacion" id="confirmacion">
                    <option value="SI">Sí</option>
                    <option value="NO">No</option>
                    <option value="Masomenos">Mas o menos</option>
                </select>
            </div>
            <div>
                <h5>Del 1 al 5 ¿Es rápido el sitio?</h5>
                <ul class="likert" name ="grado">
                    <li class="likert"> 1<input type="radio" name="grado" value="1" />
                    <li class="likert"> 2<input type="radio" name="grado" value="2" />
                    <li class="likert"> 3<input type="radio" name="grado" value="3" />
                    <li class="likert"> 4<input type="radio" name="grado" value="4" />
                    <li class="likert"> 5<input type="radio" name="grado" value="5" />
                </ul>
            </div>

            <button type="submit">Enviar Datos</button>

        </form>
    </div>
    <div class="form-row justify-content-center">
        <a href="{{ url('Listado') }}" class="btn btn-xs">Ver Registro</a>
    </div>
</div>
</body>

@endsection