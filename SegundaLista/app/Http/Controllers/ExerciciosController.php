<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function abrirFormEx1(){
        return view("Lista.ex1");
    }
    public function respostaEx1(Request $request){
        $valor1 = intval($request->input('valor1'));
        $valor2 = intval($request->input('valor2'));
        $soma = $valor1 + $valor2;
        if ($valor1 == $valor2)
        {
            $triplo = $soma * 3;
        }
        return view('Lista.ex1', compact('soma', 'triplo'));
    }

    public function abrirFormEx2(){
        return view("Lista.ex2");
    }
    public function respostaEx2(Request $request){
        $valorA = intval($request->input('valorA'));
        $valorB = intval($request->input('valorB'));
        $iguais = null;
        $ordem1 = null;
        $ordem2 = null;
        if ($valorA == $valorB) {
            $iguais = $valorA;
        } else {
            ($valorA > $valorB)? $ordem2 = $valorB.' '.$valorA : $ordem1 = $valorA.' '.$valorB;
        }
        return view('Lista.ex2', compact('iguais', 'ordem1', 'ordem2'));
    }

    public function abrirFormEx3(){
        return view("Lista.ex3");
    }
    public function respostaEx3(Request $request){
        $valor = floatval($request->input('valor'));
        $novoValor = null;
        if ($valor > 100) {
            $novoValor = $valor - ($valor * 0.15);
        }
        return view('Lista.ex3', compact('novoValor', 'valor'));
    }

    public function abrirFormEx4(){
        return view("Lista.ex4");
    }
    public function respostaEx4(Request $request){
        $numero = intval($request->input('numero'));
        $primos = [];
        for ($i = 2; $i <= $numero; $i++) {
            $contador = 0;
            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $contador++;
                }
            }
            if ($contador == 2) {
                $primos[] = $i;
            }
        }
        $numeros = implode(',', $primos);
        return view('Lista.ex4', compact('numeros'));
    }

    public function abrirFormEx5(){
        return view("Lista.ex5");
    }
    public function respostaEx5(Request $request){
        $numero = intval($request->input('numero'));
        switch ($numero) {
            case 1:
                $mes = "janeiro";
                break;
            case 2:
                $mes = "fevereiro";
                break;
            case 3:
                $mes = "março";
                break;
            case 4:
                $mes = "abril";
                break;
            case 5:
                $mes = "maio";
                break;
            case 6:
                $mes = "junho";
                break;
            case 7:
                $mes = "julho";
                break;
            case 8:
                $mes = "agosto";
                break;
            case 9:
                $mes = "setembro";
                break;
            case 10:
                $mes = "outubro";
                break;
            case 11:
                $mes = "novembro";
                break;
            case 12:
                $mes = "dezembro";
                break;
            default:
                $mes = "inexistente";
                break;
        }
        return view('Lista.ex5', compact('mes', 'numero'));
    }
}