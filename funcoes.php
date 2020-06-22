<?php
$numero_magico = 30;
function adicionarSobreNome($nome, $ultimo_nome = "") {
    if ($ultimo_nome !== "") {
        return "$nome Silva $ultimo_nome!";
    }
    return "$nome Silva!";
}

// 1.a;
function maior($a, $b, $c = null) {
    global $numero_magico;

    if ($c === null) {
        $c = $numero_magico;
    }

    if ($a > $b && $a > $c) {
        return $a;

    } else if ($b > $a && $b > $c) {
        return $b;

    } else if ($c > $a && $c > $b){
        return $c;

    } else {
        echo "DEU RUIM";
    }
}

function tabela($base, $limite = null) {

    global $numero_magico;
    if ($limite === null) $limite = $numero_magico;

    $array = [];
    for ($i = $base ; $i < $limite ; $i++) {
        $array[] = $i;
    }

    return $array;
}




// print_r(tabela(10, 20));
// // [10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]

// // 2.a

echo maior(3, 5);