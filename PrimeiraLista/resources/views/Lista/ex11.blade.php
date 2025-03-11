@extends('layout')

@section('conteudo')
    
    <form method="post" action="ex11resp">
        <h2>Calculo de IMC</h2>

        @csrf
        <div class="row">
            <div class="col">
                <label for="peso" class="form-label">Informe o peso: </label>
                <input type="number" id="peso" name="peso" class="form-control" step=".01">
            </div>
            <div class="col">
                <label for="altura" class="form-label">Informe a altura: </label>
                <input type="number" id="altura" name="altura" class="form-control" step=".01">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>

    @isset($imc)   
       <p>IMC = {{ $imc }}</p>
    @endisset       

@endsection