<?php

const URL = "https://pokeapi.co/api/v2/pokemon/";

$pokemons = [];

for ($i = 1; $i <= 15; $i++) {
    $id = $i;
    $url = URL . $id;

    $result = file_get_contents($url);
    $pokeMatriz = json_decode($result, true);

    $pokemons[$i]['nome'] = $pokeMatriz['forms'][0]['name'];
    $pokemons[$i]['altura'] = $pokeMatriz['height'];
    $pokemons[$i]['peso'] = $pokeMatriz['weight'];
    $pokemons[$i]['habilidades'] = $pokeMatriz['abilities'];
    $pokemons[$i]['imagem'] = $pokeMatriz['sprites']['other']['dream_world']['front_default'];
}

include "pokemon.php";