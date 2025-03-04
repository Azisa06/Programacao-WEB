@extends('layout')

@section('conteudo')

    <form method="post" action="listaex3">

        @csrf
        <div class="row">
            <div class="col">
                <label for="temperaturaF" class="form-label">Informe a temperatura em Farenheit: </label>
                <input type="number" id="temperaturaF" name="temperaturaF" class="form-control" step=".01">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>

    @isset($temperaturaC)   
       <p>{{ $temperaturaC }}°F</p>
    @endisset       

@endsection