@extends('layout')

@section('conteudo')

    
    <form method="post" action="listaex4">

        @csrf

        <div class="row">
            <div class="col">
                <label for="largura" class="form-label">Informe a largura: </label>
                <input type="number" name="largura" id="largura" class="form-control">
            </div>
            <div class="col">
                <label for="altura" class="form-label">Informe a altura: </label>
                <input type="number" name="altura" id="altura" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    
    </form>

    @isset($areaC)   
       <p>A área do triângulo é: {{ $area }}</p>
    @endisset       

@endsection