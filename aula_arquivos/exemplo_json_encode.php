<?php
// Criando um arquivo JSON

// Array de frutas em PHP
$frutas = [
    'banana',
    'maçã',
    'pera'
];

//Chamamos uma função json_encode do PHP que transforma um Array em uma String no formato JSON
$string_json = json_encode($frutas);

//Cria um arquivo chamado dados.txt e coloca o conteúdo da variável $string_json dentro dele.
file_put_contents("dados.txt", $string_json);