@extends('layout') <!-- extends está herdando o conteúdo da página layout -->


@section('conteudo') <!--vai procurar a secção conteudo dentro da página layout-->

<form method="post" action="/ex1resp"> <!-- quando clicar no botão, vai levar a esta página de resposta-->        
    @csrf 
    <h5>Informe 2 números. Caso sejam iguais, o triplo de sua soma será mostrado.</h5>   
    <div class="mb-3">
        <label for="valor1" class="form-label">Informe o valor 1:</label>
        <input type="number" id="valor1" name="valor1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="valor2" class="form-label">Informe o valor 2:</label>
        <input type="number" id="valor2" name="valor2" class="form-control" required="">
    </div>
    
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($soma) <!--verificando se a variável soma existe-->
        <p>O valor da soma é {{ $soma }}</p>
    @endisset

    @isset($triplo)
        <p>O triplo da soma é {{ $triplo }}</p>
    @endisset
            
@endsection