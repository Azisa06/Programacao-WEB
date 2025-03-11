@extends('layout')

@section('conteudo')
    
    <form method="post" action="ex7resp">
        <h2>Perímetro do círculo</h2>

        @csrf

        <div class="row">
            <div class="col">
                <label for="raio" class="form-label">Informe o raio do círculo: </label>
                <input type="number" id="raio" name="raio" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>

    @isset($perimetro)   
       <p>O perímetro do círculo é: {{ $perimetro }}</p>
    @endisset       

@endsection