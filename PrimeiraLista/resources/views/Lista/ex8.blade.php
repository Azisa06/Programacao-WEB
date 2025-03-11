@extends('layout')

@section('conteudo')
    
    <form method="post" action="ex8resp">
        <h2>Potenciação</h2>

        @csrf

        <div class="row">
            <div class="col">
                <label for="base" class="form-label">Informe a base: </label>
                <input type="number" id="base" name="base" class="form-control">
            </div>
            <div class="col">
                <label for="expoente" class="form-label">Informe o expoente: </label>
                <input type="number" id="expoente" name="expoente" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>

    @isset($resultado)   
       <p>Resultado = {{ $resultado }}</p>
    @endisset       

@endsection