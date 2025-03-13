@extends('layout')


@section('conteudo')

<form method="post" action="/ex8resp">       
    @csrf 
    <h5>Ordem decrescente do número informado até 1.</h5>   
    <div class="mb-3">
        <label for="numero" class="form-label">Informe um número:</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Ordenar</button>
    </div>
</form>

    @isset($numeros)
        <p>{{ $numeros }}</p>
    @endisset
            
@endsection