@extends('layout')

@section('conteudo')
    
    <form method="post" action="ex9resp">
        <h2>Conversão de metros para centímetros</h2>

        @csrf

        <div class="row">
            <div class="col">
                <label for="metros" class="form-label">Informe o valor em metros: </label>
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