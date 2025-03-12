@extends('layout')


@section('conteudo')

<form method="post" action="/ex2resp">       
    @csrf 
    <h5>Informe 2 números para serem mostrados em ordem crescente.</h5>   
    <div class="mb-3">
        <label for="valorA" class="form-label">Informe o valor A:</label>
        <input type="number" id="valorA" name="valorA" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="valoB" class="form-label">Informe o valor B:</label>
        <input type="number" id="valorB" name="valorB" class="form-control" required="">
    </div>
    
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($iguais)
        <p>Números iguais = {{ $iguais }}</p>
    @endisset

    @isset($ordem1)
        <p>{{ $ordem1 }}</p>
    @endisset

    @isset($ordem2)
        <p>{{ $ordem2 }}</p>
    @endisset
            
@endsection