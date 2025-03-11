@extends('layout')

@section('conteudo')

    <form method="post" action="ex2resp">
        <h2>Temperatura em celsius para fahrenheit</h2>

        @csrf
        
        <div class="row">
            <div class="col">
                <label for="temperaturaC" class="form-label">Informe a temperatura em graus celsius: </label>
                <input type="number" id="temperaturaC" name="temperaturaC" class="form-control" step=".01">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>

    @isset($temperaturaF)   
       <p>{{ $temperaturaF }}°F</p>
    @endisset       

@endsection