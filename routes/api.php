<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/nome', function(Request $request){ 

    $nome = $request->input("nome"); 

    return $nome; 

});

Route::get('dados', function(Request $request){ 

    $Dado1 = $request->input("nome"); 

    $Dado2 = $request->input("idade"); 

    return 'Meu nome é ' . $Dado1 . ', tenho ' . $Dado2 . ' anos de idade'; 

}); 

Route::get('dadoSSS', function(Request $request){ 

    $Dado1 = $request->input("nome"); 

    $Dado2 = $request->input("Nascimento"); 

    $Dado3 = $request->input("cidade"); 

    return 'Meu nome é ' . $Dado1 . ', nasci no ano de ' . $Dado2 . ' ,na cidade de ' . $Dado3; 

}); 

Route::get('Subtração', function(Request $request){ 

    $Primeiraentrada = $request->input("Primeiranota"); 

    $Segundaentrada = $request->input("Segundanota"); 

    $Terceiraentrada = $request->input("Terceiranota"); 

    $Resultado = $Primeiraentrada - $Segundaentrada - $Terceiraentrada; 

    return 'O resultado da subtração é ' . $Primeiraentrada . '-'. $Segundaentrada . '-' . $Terceiraentrada . '=' . $Resultado; 

}); 