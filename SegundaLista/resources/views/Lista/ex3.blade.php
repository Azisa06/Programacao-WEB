@extends('layout')


@section('conteudo')

<form method="post" action="/ex3resp">       
    @csrf 
    <h5>Informe um valor.</h5>   
    <div class="mb-3">
        <label for="valor" class="form-label">Informe o valor:</label>
        <input type="number" id="valor" name="valor" class="form-control" required="">
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>

    @if(isset($novoValor, $valor))
        <p>R${{ $valor }} com desconto de 15% = R${{ $novoValor }}</p>
        @else
            <p>Não há descontos para este valor!</p>
    @endif
            
@endsection