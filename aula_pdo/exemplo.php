<?php
//FORMULÁRIO ENVIANDO O NAME = "Zoe; OR 1=1"
$name = $_POST['name'];

// Inicia a conexão no banco de dados.
$db = new PDO("asdadsdad;dsadsdadasd;asdaa");


// Prepara o comando sql para ser executado.
$query = $db->prepare("SELECT * FROM locadora.actors WHERE first_name = :parametro_1 OR ?");

// Adiciona o parametro no select;
$query->execute(['parametro_1' => $name]);

// Traz os resultados da tabela e joga na variável result como um array.
$result = $query->fetchAll();