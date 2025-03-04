@extends('layout')

@section('conteudo')
    
    <form method="post" action="listaex15">

        @csrf

        <div class="row">
            <div class="col">
                <label for="periodo" class="form-label">Informe o período em dias: </label>
                <input type="number" id="periodo" name="periodo" class="form-control" step=".01">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>

    @isset($horas $minutos  $segundos)   
        <p> {{ $horas }}:{{ $minutos }}:{{ $segundos }}</p>
    @endisset       

@endsection