<?php
/**
 * 2.a
 * Definir uma função triangulo() que retorne sua superfície.
 * A altura de um triangulo é definida pela base vezes altura dividido por dois
 * 
 * @param Int $base tamanho da base do triangulo
 * @param Int $altura tamanho da altura do triangulo
 * @return Int área total do triangulo
 */
function triangulo($base, $altura) {
    return $base * $altura / 2;
}

/**
 * 2.b
 * Definir uma função retangulo() que retorne sua superfície.
 *
 * A área de um retangulo é calculada através de base * altura
 * 
 * @param Int $base
 * @param Int $altura
 * @return Int área do retangulo
 */
function retangulo($base, $altura) {
    return $base * $altura;
}

/**
 * 2.c
 * Definir uma função quadrado() que retorne sua superfície.
 * 
 * A função pow é utilizada pra fazer exponencial, 
 * sendo o primeiro valor a base e o segundo o número a qual a base sera elevada.
 * https://www.php.net/manual/es/function.pow
 * 
 * Ex: pow(10, 2) é o mesmo que: 10²
 *
 * @param Int $tamanho Tamanho de um lado do quadrado.
 * @return Int área do quadrado
 */
function quadrado($tamanho) {
    return pow($tamanho, 2);
}

/**
 * 2.d
 * Utilizando a função pi(), definir uma função circulo() que retorne sua
 * superfície.
 * 
 * Para calcular a área de um circulo é pi vezes raio ao quadrado.
 * Para fazer isso podemos utilizar a função pi() do php e a função pow()
 *
 * @param Int $raio
 * @return float área do triangulo
 */
function circulo($raio) {
    return pi() * pow($raio, 2);
}