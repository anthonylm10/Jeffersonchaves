<?php

if(isset($_GET['dataNascimento']))
$dataNascimento = $_GET['dataNascimento'];
else
$dataNascimento = "";

if($dataNascimento != ""){
$dataNascimento = explode("-", $dataNascimento);

$ano = $dataNascimento[0];
$mes = $dataNascimento[1];
$dia = $dataNascimento[2];


    function somatorio($mes)
    {
        $acumuladora = 0;
        $i = 0;
        for ($i = $mes; $i > 0; $i--) {
            $acumuladora += $i;
        }
        return $acumuladora;
    }
    function safadao($dia, $mes, $ano){ 
    $safadeza = (somatorio($mes) + (($ano/100) * (50-$dia)))/10;
    
    $anjo = 100 - $safadeza;
    $resultados = [$anjo, $safadeza];
    return $resultados;
    
    }
    
    $resultadosTela = safadao($dia, $mes, $ano);
    }
require "safado_view.php";
