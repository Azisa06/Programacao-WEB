@extends('layout')


@section('conteudo')

<form method="post" action="/ex7resp">       
    @csrf 
    <h5>Informe um número e será mostrado a soma de 1 até o valor informado.</h5>   
    <div class="mb-3">
        <label for="numero" class="form-label">Informe um número:</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Somar</button>
    </div>
</form>

    @if(isset($soma, $numeros))
        <p>{{ $numeros }} = {{ $soma }}</p>
    @endif
            
@endsection