<?php

use Illuminate\Support\Facades\Route;
use illuminate\Http\Request;

Route::get('/', function () { //route:: significa que o método é estático
    return view('welcome');
});

Route::get('/bem-vindo', function(){
    return "Seja bem vindo!";
});

Route::get('/exer1', function(){
    return view('exer1');
});

Route::post('/exer1resp', function(Request $request){ //request é usado quando é necessário enviar dados para uma página
    $valor1 = intval($request->input('valor1'));
    $valor2 = intval($request->input('valor2'));
    $soma = $valor1 + $valor2;
    return view('exer1', compact('soma')); //compact transforma as variáveis em arrays, passando apenas seu nome
});

Route::get('/ex1', function(){
    return view('lista.ex1');
});

Route::post('respex1', function(Request $request){
    $nota1 = intval($request->input('nota1'));
    $nota2 = intval($request->input('nota2'));
    $nota3 = intval($request->input('nota3'));
    $media = ($nota1 + $nota2 + $nota3) / 3;
    return view('lista.ex1', compact('media'));
});

Route::get("/ex2", function(){
    return view("lista.ex2");
});

Route::post("listaex2", function(Request $request){
    $temperaturaC = floatval($request->input("temperaturaC"));
    $temperaturaF = $temperaturaC * 1.8 + 32;
    return view('lista.ex2', compact('temperaturaF'));
});

Route::get('/ex3', function(){
    return view('lista.ex3');
});

Route::post('listaex3', function(Request $request){
    $temperaturaF = floatval($request->input("temperaturaF"));
    $temperaturaC = ($temperaturaF - 32) / 1.8;
    return view("lista.ex3", compact("temperaturaC"));
});

Route::get('/ex4', function(){
    return view('lista.ex4');
});

Route::post('listaex4', function(Request $request){
    $altura = floatval($request->input('nota1'));
    $largura = floatval($request->input('nota2'));
    $area = $largura * $altura;
    return view('lista.ex4', compact('area'));
});

Route::get('/ex5', function(){
    return view('lista.ex5');
});

Route::post('listaex5', function(Request $request){
    $raio = floatval($request->input('raio'));
    $area = $raio * 3.14;
    return view('lista.ex5', compact('area'));
});

Route::get('/ex6', function(){
    return view('lista.ex6');
});

Route::post('listaex6', function(Request $request){
    $largura = floatval($request->input('largura'));
    $altura = floatval($request->input('altura'));
    $perimetro = ($largura * 2) + ($altura * 2);
    return view('lista.ex6', compact('perimetro'));
});

Route::get('/ex7', function(){
    return view('lista.ex7');
});

Route::post('listaex7', function(Request $request){
    $raio = floatval($request->input('raio'));
    $perimetro = 2 * 3.14 * $raio;
    return view('lista.ex7', compact('perimetro'));
});

Route::get('/ex8', function(){
    return view('lista.ex8');
});

Route::post('/listaex8', function(Request $request){
    $base = intval($request->input('base'));
    $expoente = intval($request->input('expoente'));
    $resultado = $base ** $expoente;
    return view('lista.ex8', compact('resultado'));
});

Route::get('/ex9', function(){
    return view('lista.ex9');
});

Route::post('/listaex9', function(Request $request){
    $metros = intval($request->input('metros'));
    $resultado = $metros * 100;
    return view('lista.ex9', compact('resultado'));
});

Route::get('/ex10', function(){
    return view('lista.ex10');
});

Route::post('/listaex10', function(Request $request){
    $metros = intval($request->input('metros'));
    $resultado = $metros * 0.621371;
    return view('lista.ex10', compact('resultado'));
});

Route::get('/ex11', function(){
    return view('lista.ex11');
});

Route::post('/listaex11', function(Request $request){
    $peso = floatval($request->input('altura'));
    $altura = floatval($request->input('peso'));
    $imc = $peso / ($altura ** 2);
    return view('lista.ex11', compact('imc'));
});

Route::get('/ex12', function(){
    return view('lista.ex12');
});

Route::post('/listaex12', function(Request $request){
    $preco = floatval($request->input('preco'));
    $percent = floatval($request->input('percent'));
    $desconto = $preco - ($preco * ($percent / 100));
    return view('lista.ex12', compact('desconto'));
});

Route::get('/ex13', function(){
    return view('lista.ex13');
});

Route::post('/listaex13', function(Request $request){
    $capital = floatval($request->input('capital'));
    $percent = floatval($request->input('percent'));
    $periodo = intval($request->input('periodo'));
    $juros = $capital * ($percent / 100) * $periodo;
    return view('lista.ex13', compact('juros'));
});

Route::get('/ex14', function(){
    return view('lista.ex14');
});

Route::post('/listaex14', function(Request $request){
    $capital = floatval($request->input('capital'));
    $percent = floatval($request->input('percent'));
    $periodo = intval($request->input('periodo'));
    $juros = $capital * (1 + $percent) ^ $periodo;
    return view('lista.ex14', compact('juros'));
});

Route::get('/ex15', function(){
    return view('lista.ex15');
});

Route::post('/listaex15', function(Request $request){
    $periodo = intval($request->input('periodo'));
    $totalSegundos = $periodo * 86400;
    $horas = floor($totalSegundos / 3600); 
    $resto = $horas % 3600;
    $minutos = floor($resto / 60);
    $segundos = $minutos % 60;
    return view('lista.ex15', compact('horas', 'minutos', 'segundos'));
});
