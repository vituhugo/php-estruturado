<?php
    session_start();

    //Se o contador não existe inicie-o com 0;
    if (!isset($_SESSION['contador'])) {
        $_SESSION['contador'] = 0;
    }

    // Se clicar no botão que tem o valor adicionar.
    if (isset($_POST['tipo']) && $_POST['tipo'] === 'adiciona') {
        $_SESSION['contador']++;
    }

    // Se clicar no botão que tem o valor reiniciar ele zera o contador
    if (isset($_POST['tipo']) && $_POST['tipo'] === 'reinicia') {
        $_SESSION['contador'] = 0;
    }

    // Exibe o valor do contador!
    echo "VALOR ATUAL DO CONTADOR: ", $_SESSION['contador'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <button type="submit" name="tipo" value="adiciona">Adiciona</button>
        <button type="submit" name="tipo" value="reinicia">Reinicia</button>
    </form>
    <a href="/mostrar.php">Mostrar!</a>
</body>
</html>