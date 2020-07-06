<?php
//Inicia a sessão, é obrigatório em todo arquivo que utilize o $_SESSION
session_start();

// Verifica se o contador existe para poder exibi-lo
if (isset($_SESSION['contador'])) { // isset verifica se a variavel existe!
    echo "Valor do contador: ", $_SESSION['contador']; 
} else {
    echo "Variável não iniciada!";
}
