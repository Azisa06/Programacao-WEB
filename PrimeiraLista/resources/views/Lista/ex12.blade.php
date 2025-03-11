@extends('layout')

@section('conteudo')
    
    <form method="post" action="ex12resp">
        <h2>Desconto</h2>

        @csrf

        <div class="row">
            <div class="col">
                <label for="preco" class="form-label">Informe o preço: </label>
                <input type="number" id="preco" name="preco" class="form-control" step=".01">
            </div>
            <div class="col">
                <label for="percent" class="form-label">Informe o percentual de desconto: </label>
                <input type="number" id="percent" name="percent" class="form-control" step=".01">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    
    </form>

    @isset($desconto)   
        <p>Novo preço = {{ $desconto }}</p>
    @endisset       

@endsection