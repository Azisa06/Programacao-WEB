@extends('layout')

@section('conteudo')
    
    <form method="post" action="ex10resp">
    <h2>Conversão de quilômetros para milhas</h2>

        @csrf

        <div class="row">
            <div class="col">
                <label for="metros" class="form-label">Informe o valor em quilômetros: </label>
                <input type="number" id="metros" name="metros" class="form-control">
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