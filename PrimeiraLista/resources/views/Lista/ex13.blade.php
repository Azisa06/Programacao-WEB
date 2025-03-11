@extends('layout')

@section('conteudo')
    
    <form method="post" action="ex13resp">
        <h2>Juros simples</h2>

        @csrf

        <div class="row">
            <div class="col">
                <label for="capital" class="form-label">Informe o capital: </label>
                <input type="number" id="capital" name="capital" class="form-control" step=".01">
            </div>
            <div class="col">
                <label for="percent" class="form-label">Informe a taxa de juros: </label>
                <input type="number" id="percent" name="percent" class="form-control" step=".01">
            </div>
            <div class="col">
                <label for="periodo" class="form-label">Informe o período em dias: </label>
                <input type="number" id="periodo" name="periodo" class="form-control" step=".01">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    
    </form>

    @isset($juros)   
        <p>Juros = {{ $juros }}</p>
    @endisset       

@endsection