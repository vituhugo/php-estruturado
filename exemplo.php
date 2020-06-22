<?php
function adicionaSilva($nome, $ultimo_nome) {
    return "$nome Silva $ultimo_nome! \n";
}

///////////////////////////////////////////
// LINHAS DE CODIGO

$nome = adicionaSilva("Victor Hugo", "Rodrigues");
echo $nome;
