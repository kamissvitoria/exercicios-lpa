<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/nome', function (Request $request) {

    $nome = $request->input("nome");

    return $nome;
});

Route::get('dados', function (Request $request) {

    $Dado1 = $request->input("nome");

    $Dado2 = $request->input("idade");

    return 'Meu nome é ' . $Dado1 . ', tenho ' . $Dado2 . ' anos de idade';
});

Route::get('dadoSSS', function (Request $request) {

    $Dado1 = $request->input("nome");

    $Dado2 = $request->input("Nascimento");

    $Dado3 = $request->input("cidade");

    return 'Meu nome é ' . $Dado1 . ', nasci no ano de ' . $Dado2 . ' ,na cidade de ' . $Dado3;
});

Route::get('Subtração', function (Request $request) {

    $Primeiraentrada = $request->input("Primeiranota");

    $Segundaentrada = $request->input("Segundanota");

    $Terceiraentrada = $request->input("Terceiranota");

    $Resultado = $Primeiraentrada - $Segundaentrada - $Terceiraentrada;

    return 'O resultado da subtração é ' . $Primeiraentrada . '-' . $Segundaentrada . '-' . $Terceiraentrada . '=' . $Resultado;
});

Route::get('Divisão', function (Request $request) {

    $Primeiraentrada = $request->input("Primeiranota");

    $Segundaentrada = $request->input("Segundanota");

    $Resultado = $Primeiraentrada / $Segundaentrada;

    return 'O resultado da divisão é ' . $Primeiraentrada . ":" . $Segundaentrada . '=' . $Resultado;
});


Route::get('Multiplicação', function (Request $request) {

    $Primeiraentrada = $request->input("Primeiranota");

    $Segundaentrada = $request->input("Segundanota");

    $Resultado = $Primeiraentrada * $Segundaentrada;
    return $Resultado;
});

Route::get('Média', function (Request $request) {

    $Primeiraentrada = $request->input("Primeiranota");

    $Segundaentrada = $request->input("Segundanota");

    $Terceiraentrada = $request->input("Terceiranota");

    $Quartaentrada = $request->input("Quartanota");

    $Quintaentrada = $request->input("Quintanota");

    $resultado = ($Primeiraentrada + $Segundaentrada + $Terceiraentrada + $Quartaentrada + $Quintaentrada) / 5;

    return 'A média do usuário' . $resultado;
});

Route::get('Divisões', function (Request $request) {

    $Primeiraentrada = $request->input("Primeiranota");

    $Segundaentrada = $request->input("Segundanota");

    $Resultado = $Segundaentrada / $Primeiraentrada;

    return 'O resultado da divisão é ' . $Segundaentrada . ":" . $Primeiraentrada . '=' . $Resultado;
});

Route::get('dobro', function (Request $request) {

    $primeiraEntrada = $request->input("Numero1");

    $resultado = $primeiraEntrada * 2;

    return $resultado;
});

Route::get('Area', function (Request $request) {

    $Base = $request->input("primeiraNota");

    $Altura = $request->input("segundaNota");

    $resultado = $Base * $Altura;

    return 'A area do retângulo é ' . $resultado;
});

Route::get('Porcentagem', function (Request $request) {

    $preço = $request->input("Preço");

    $porcentagem = $request->input("Porcentagem");

    $resultado = $preço - ($preço * $porcentagem / 100);

    return 'O preço final do produto é ' . $resultado;
});

Route::get('Porcentagem', function (Request $request) {

    $preço = $request->input("Preço");

    $porcentagem = $request->input("Porcentagem");

    $resultado = $preço - ($preço * $porcentagem / 100);

    return 'O preço final do produto é ' . $resultado;
});

Route::get('Vendas', function (Request $request) {

    $totalVendas = $request->input("Total de vendas");

    $comissão = ($totalVendas * 5) / 100;

    return $comissão;
});

Route::get('Dias', function (Request $request) {

    $numeroDias = $request->input("Dias");

    $horas = $numeroDias * 24;

    $minutos = $numeroDias * 1440;

    $segundos = $numeroDias * 86400;

    return 'Em ' . $numeroDias . 'Dias, temos ' . $horas . 'Horas, ' . $minutos . 'minutos' . $segundos . 'segundos';
});

Route::get('Compras', function (Request $request) {



    $preçoProduto = $request->input("preço");



    $quantidadeComprada = $request->input("quantidade");



    $Resultado = $preçoProduto * $quantidadeComprada;



    return 'O valor total da compra é ' . $preçoProduto . '*' . $quantidadeComprada . '=' . $Resultado;
});

Route::get('Aumento', function (Request $request) {

    $salario = $request->input("salario");

    $porcentagem = $request->input("porcentagem");

    $conta = ($salario * $porcentagem) / 100;

    $resultado = $salario + $conta;

    return 'O salario anterior é de ' . $salario . ', o aumento percentual é de ' . $porcentagem . ' E o salario atual é' . $resultado;
});

Route::get('Soma', function (Request $request) {

    $Primeiraentrada = $request->input("Primeiranota");

    $Segundaentrada = $request->input("Segundanota");

    $Resultado = $Primeiraentrada + $Segundaentrada;
    return $Resultado;
});


Route::get('verifica/par', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero % 2 == 0) {
        return 'par';
    } else {
        return 'impar';
    }
});

Route::get('variavel', function (Request $request) {
    $idade = $request->input('idade');

    if ($idade > 10) {
        return "pode entrar no brinquedo";
    } else {
        return "não pode entrar no brinquedo";
    }
});

Route::get('temperatura', function (Request $request) {
    $Temperatura = $request->input('graus');
    if ($Temperatura > 30) {
        return "está quente";
    } else {
        return "está fresco";
    }
});

Route::get('positivo/negativo', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 0) {
        return "é positivo";
    } elseif ($numero < 0) {
        return "é negativo";
    } else {
        return "é zero";
    }
});

Route::get('doisnumeros', function (Request $request) {
    $numero1 = $request->input("numero1");
    $numero2 = $request->input("numero2");
    if ($numero1 > $numero2) {
        return $numero1 . "é maior";
    } else {
        $numero2 . "é maior";
    }
});



Route::get('exercicio1', function (Request $request) {
    $idade = $request->input('numero');

    if ($idade > 10) {
        return "é maior que 10";
    } else {
        return "não é maior que 10";
    }
});

Route::get('exercicio2', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 0) {
        return "é positivo";
    } elseif ($numero < 0) {
        return "é negativo";
    } else {
        return "é zero";
    }
});

Route::get('exercicio3', function (Request $request) {
    $idade = $request->input('idade');

    if ($idade > 18) {
        return "Maior de idade";
    } else {
        return "Menor de idade";
    }
});


Route::get('exercicio4', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero % 2 == 0) {
        return 'par';
    } else {
        return 'impar';
    }
});

Route::get('exercicio5', function (Request $request) {
    $numero1 = $request->input("numero1");
    $numero2 = $request->input("numero2");
    if ($numero1 > $numero2) {
        return $numero1 . "é maior";
    } else {
        $numero2 . "é maior";
    }
});

Route::get('exercicio6', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero % 9 == 0) {
        return 'é divisivel por 9';
    } else {
        return 'não divisivel por nove';
    }
});

Route::get('exercicio7', function (Request $request) {
    $Temperatura = $request->input('graus');
    if ($Temperatura > 30) {
        return "está quente";
    } else {
        return "está fresco";
    }
});

Route::get('exercicio8', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero % 7 == 0) {
        return 'multiplo';
    } else {
        return 'não multiplo';
    }
});

Route::get('exercicio9', function (Request $request) {
    $idade = $request->input('idade');

    if ($idade < 12) {
        return "Você é uma criança";
    } else {
        return "Não é criança";
    }
});

Route::get('exercicio10', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero % 2 == 0) {
        return 'par';
    } else {
        return 'impar';
    }
});

Route::get('exercicio11', function (Request $request) {
    $idade = $request->input('numero');

    if ($idade <= 100) {
        return "É menor que 100";
    } else {
        return "Maior que 100";
    }
});

Route::get('exercicio12', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero % 6 == 0) {
        return 'é divisivel por 6';
    } else {
        return 'não divisivel por 6';
    }
});

Route::get('exercicio13', function (Request $request) {
    $nome = $request->input('nome');
    if($nome = "Alice"){
        return "Olá, $nome";
    }
});

Route::get('exercicio14', function (Request $request) {
$idade = $request->input('idade');
$carteira = $request->input('carteira');

    if ($idade >= 18 ){
    if ($carteira == "sim"){

        return "você pode dirigir";

    }
       
    } else {
        return "você não pode dirigir";
    }

});  


Route::get('exercicio16', function (Request $request) {
    $numero1 = $request->input("numero1");
    $numero2 = $request->input("numero2");
    if ($numero1 != $numero2) {
        if ($numero1 < $numero2) {
            return $numero1;
        } else {
            return $numero2;
        }
    } else {
        $numero2 . "iguais";
    }
});

Route::get('exercicio17', function (Request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('idade');
   if ($idade >= 18){
    return "você é maior de idade, $nome!";
   } else {
    return "você não é maior de idade";
   }

});

Route::get('exercicio18', function (Request $request) {
    $primeiroNumero= $request->input('numero1');
    $segundoNumero = $request->input('numero2');
   if ($primeiroNumero == 0){
    return  "não é possível efetuar a divisão pois o primeiro número é zero";
   } else if ($segundoNumero== 0){
    return "não é possível efetuar a divisão pois o primeiro número é zero";
} else { $resultado = $primeiroNumero/$segundoNumero;
return "o resultado da divisão é $resultado"; }

});

Route::get('exercicio19', function (Request $request) {
    $numero1= $request->input('numero1');
    $numero2 = $request->input('numero2');
    $resultado = $numero1 * $numero2;
    if ($resultado > 100){
        return "o resultado $resultado é maior que 100";
    }



});

Route::get('exercicio20', function (Request $request) {
    $numero1= $request->input('numero1');
    $numero2 = $request->input('numero2');
    $soma = $numero1 + $numero2;
    if ($soma % 2 == 0){
        return $multiplicação = $numero1 * $numero2;
    } else { 
        $divisão = $numero1/$numero2; 
        return $divisão;
    }
    });