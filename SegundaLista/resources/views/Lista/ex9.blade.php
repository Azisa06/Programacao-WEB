@extends('layout')


@section('conteudo')

<form method="post" action="/ex9resp">       
    @csrf 
    <h5>Fatorial do número informado.</h5>   
    <div class="mb-3">
        <label for="numero" class="form-label">Informe um número:</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Calcular</button>
    </div>
</form>

    @if(isset($numero, $fatorial))
        <p>{{ $numero }}! = {{ $fatorial }}</p>
    @endif
            
@endsection