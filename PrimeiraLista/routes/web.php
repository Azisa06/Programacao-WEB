<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ex1', function(){
    return view('lista.ex1');
});

Route::post('ex1resp', function(Request $request){
    $nota1 = floatval($request->input('nota1'));
    $nota2 = floatval($request->input('nota2'));
    $nota3 = floatval($request->input('nota3'));
    $media = ($nota1 + $nota2 + $nota3) / 3;
    return view('lista.ex1', compact('media'));
});

Route::get("/ex2", function(){
    return view("lista.ex2");
});

Route::post("ex2resp", function(Request $request){
    $temperaturaC = floatval($request->input("temperaturaC"));
    $temperaturaF = $temperaturaC * 1.8 + 32;
    return view('lista.ex2', compact('temperaturaF'));
});

Route::get('/ex3', function(){
    return view('lista.ex3');
});

Route::post('ex3resp', function(Request $request){
    $temperaturaF = floatval($request->input("temperaturaF"));
    $temperaturaC = ($temperaturaF - 32) / 1.8;
    return view("lista.ex3", compact("temperaturaC"));
});

Route::get('/ex4', function(){
    return view('lista.ex4');
});

Route::post('ex4resp', function(Request $request){
    $altura = floatval($request->input('altura'));
    $largura = floatval($request->input('largura'));
    $area = ($largura * $altura) / 2;
    return view('lista.ex4', compact('area'));
});

Route::get('/ex5', function(){
    return view('lista.ex5');
});

Route::post('ex5resp', function(Request $request){
    $raio = floatval($request->input('raio'));
    $area = $raio * 3.14;
    return view('lista.ex5', compact('area'));
});

Route::get('/ex6', function(){
    return view('lista.ex6');
});

Route::post('ex6resp', function(Request $request){
    $largura = floatval($request->input('largura'));
    $altura = floatval($request->input('altura'));
    $perimetro = ($largura * 2) + ($altura * 2);
    return view('lista.ex6', compact('perimetro'));
});

Route::get('/ex7', function(){
    return view('lista.ex7');
});

Route::post('ex7resp', function(Request $request){
    $raio = floatval($request->input('raio'));
    $perimetro = 2 * 3.14 * $raio;
    return view('lista.ex7', compact('perimetro'));
});

Route::get('/ex8', function(){
    return view('lista.ex8');
});

Route::post('/ex8resp', function(Request $request){
    $base = intval($request->input('base'));
    $expoente = intval($request->input('expoente'));
    $resultado = $base ** $expoente;
    return view('lista.ex8', compact('resultado'));
});

Route::get('/ex9', function(){
    return view('lista.ex9');
});

Route::post('/ex9resp', function(Request $request){
    $metros = intval($request->input('metros'));
    $resultado = $metros * 100;
    return view('lista.ex9', compact('resultado'));
});

Route::get('/ex10', function(){
    return view('lista.ex10');
});

Route::post('/ex10resp', function(Request $request){
    $metros = intval($request->input('metros'));
    $resultado = $metros * 0.621371;
    return view('lista.ex10', compact('resultado'));
});

Route::get('/ex11', function(){
    return view('lista.ex11');
});

Route::post('/ex11resp', function(Request $request){
    $peso = floatval($request->input('altura'));
    $altura = floatval($request->input('peso'));
    $imc = $peso / ($altura ** 2);
    return view('lista.ex11', compact('imc'));
});

Route::get('/ex12', function(){
    return view('lista.ex12');
});

Route::post('/ex12resp', function(Request $request){
    $preco = floatval($request->input('preco'));
    $percent = floatval($request->input('percent'));
    $desconto = $preco - ($preco * ($percent / 100));
    return view('lista.ex12', compact('desconto'));
});

Route::get('/ex13', function(){
    return view('lista.ex13');
});

Route::post('/ex13resp', function(Request $request){
    $capital = floatval($request->input('capital'));
    $percent = floatval($request->input('percent'));
    $periodo = intval($request->input('periodo'));
    $juros = $capital * ($percent / 100) * $periodo;
    return view('lista.ex13', compact('juros'));
});

Route::get('/ex14', function(){
    return view('lista.ex14');
});

Route::post('/ex14resp', function(Request $request){
    $capital = floatval($request->input('capital'));
    $percent = floatval($request->input('percent'));
    $periodo = intval($request->input('periodo'));
    $juros = $capital * (1 + $percent) ^ $periodo;
    return view('lista.ex14', compact('juros'));
});

Route::get('/ex15', function(){
    return view('lista.ex15');
});

Route::post('/ex15resp', function(Request $request){
    $periodo = floatval($request->input('periodo'));
    $totalSegundos = $periodo * 86400;
    $horas = floor($totalSegundos / 3600); 
    $resto = $horas % 3600;
    $minutos = floor($resto / 60);
    $segundos = $minutos % 60;
    return view('lista.ex15', compact('horas', 'minutos', 'segundos'));
});