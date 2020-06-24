<?php 
    // Exibe todos os valores que estão dentro da variável global $_GET
    // são os mesmos que estão na URL após o "?"
    var_dump($_GET);

    // Exibe um valor específico. 
    // echo $_GET['nome']; //Isso da erro quando não envio o formulário.

    // Para solucionar esse erro precisamos utilizar um "if" 
    // validando que ele existe no get ou que o get exista
    if ($_GET) {
        echo $_GET['nome'];
    }

    //Mantendo o exemplo anterior, so que com o foreach
    if ($_GET) {
        // Cria um laço de repetição com base no array $_GET
        // Cada interação desse laço vai ser um dos campos dentro da variável $_GET;
        foreach($_GET as $campo => $valor) {
            echo "$campo: $valor \n";
        }
    }
?>
<!DOCTYPE HTML>
<html>  
<body>
    <form method="get">
        Nome: <input type="text" name="nome"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
</body>
</html>
