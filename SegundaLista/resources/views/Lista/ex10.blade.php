@extends('layout')


@section('conteudo')

<form method="post" action="/ex10resp">       
    @csrf 
    <h5>Tabuada do número informado.</h5>   
    <div class="mb-3">
        <label for="numero" class="form-label">Informe um número:</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Calcular</button>
    </div>
</form>

    @if(isset($tabuadaFormatada, $numero))
        <h6>Tabuada do {{ $numero }}</h6>
        <p>{!! nl2br(e($tabuadaFormatada)) !!}</p> <!-- maneira para que o php.blade reconhece caracteres especiais (\n)-->
    @endif
            
@endsection