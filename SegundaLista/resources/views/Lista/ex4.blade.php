@extends('layout')


@section('conteudo')

<form method="post" action="/ex4resp">       
    @csrf 
    <h5>Informe um número e será mostrado todos os primos até o valor digitado.</h5>   
    <div class="mb-3">
        <label for="numero" class="form-label">Informe um número:</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>
    
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($numeros)
        <p>Primos = {{ $numeros }}</p>
    @endisset
            
@endsection