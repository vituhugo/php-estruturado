<?php

// Captura todo o conteúdo do dados.txt e retorna na função
// capturamos o retorno no $string_json.
$string_json = file_get_contents("dados.txt");

//Json decode é uma função php que faz o inverso do json_encode,
//transforma uma string no formato JSON e retorna como um array PHP
$frutas = json_decode($string_json);

//Exibimos a variável no var_dump
var_dump($frutas);