<?php
#versão 1
$frase = "";


if(isset($_GET['letraNome']))
$letraNome = $_GET['letraNome'];
else 
$letraNome = "";
if(isset($_GET['mesNascimento']))
$mesNascimento = $_GET['mesNascimento'] - 1;
else
$mesNascimento = "";
if(isset($_GET['diaNascimento']))
$diaNascimento = $_GET['diaNascimento'] - 1;
else 
$diaNascimento = "";


$vetor1 = [
    "a" => "água com limão",
    "b" => "Bacon",
    "c" => "Cúrcuma",
    "d" => "Doce de leite",
    "e" => "Azeite",
    "f" => "Frango",
    "g" => "Gengibre",
    "h" => "Adoçante",
    "i" => "Açucar",
    "j" => "Jiló",
    "k" => "Comida Japonesa",
    "l" => "Leite",
    "m" => "Macarrão",
    "n" => "Nata",
    "o" => "Ovo",
    "p" => "Pizza",
    "q" => "Óleo de cooc",
    "r" => "Rabanada",
    "s" => "Suco detox",
    "t" => "Sal rosa",
    "u" => "Glutamina",
    "v" => "Jiló",
    "w" => "Peixe",
    "x" => "Própolis",
    "y" => "Kumbucha",
    "z" => "Peixe",

];


$vetor2 = [
    "ao acordar",
    "pré-treino",
    "amassado com limão",
    "no cabelo",
    "em Jejum",
    "de 3 em 3 horas",
    "no chá",
    "no café",
    "Depois das 18h00",
    "antes da aula",
    "misturado na àgua",
    "antes do almoço"
];

$vetor3 = [
    "diminiu o inchaço",
    "previne infarto",
    "cura dor de dente",
    "limpa o fígado",
    "deixa mais inteligente",
    "limpa as artérias",
    "deixa musculos@",
    "fortalece a unha",
    "mata",
    "dá sorte",
    "da azar"
];

if($letraNome || $mesNascimento || $diaNascimento != "")
$frase = $vetor1[$letraNome] . " " . $vetor2[$mesNascimento] . " " . $vetor3[$diaNascimento];
//REFATORAR
/*
$posicao_aleatoria = rand(97, 102);
$caracter_aleatorio = chr($posicao_aleatoria);
$frase = "{$vetor1[rand(0, 6)]} {$vetor2[rand(0, 7)]}, {$vetor3[$caracter_aleatorio]}";
//abs -> obtem o valor absoluto.
*/

require 'fn_view.php';
