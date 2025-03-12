@extends('layout')


@section('conteudo')

<form method="post" action="/ex3resp">       
    @csrf 
    <h5>Informe um valor.</h5>   
    <div class="mb-3">
        <label for="valor" class="form-label">Informe o valor:</label>
        <input type="number" id="valor" name="valor" class="form-control" required="">
    </div>
    
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @if(isset($novoValor))
        <p>Valor com desconto de 15% = R${{ $novoValor }}</p>
        @else
            <p>O valor continua o mesmo = R${{ $valor }}</p>
    @endif
            
@endsection