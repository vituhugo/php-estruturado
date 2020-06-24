<?php
// NO NAVEGADOR ESTá localhost/aula_http/exemplo.php?source=hp
echo $_GET['nome'];
// Exibe: hp
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <p>
            <label>Nome</label>
            <input type="text" name="nome" />
        </p>
        <p>
            <button>Enviar!</button>
        </p>
    </form>
</body>
</html>
