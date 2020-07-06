<?php
    session_start();

    // [Debug] Mostra na tela os dados que estão na variável $_POST
    var_dump($_POST);

    //Pegar o valor enviado pelo formulário
    if($_POST) {
        //Guardar o valor em algum lugar.
        $_SESSION['cor'] = $_POST['cor'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Exibe ele no background da página através do atributo style do HTML. -->
<body style="background: <?php echo $_SESSION["cor"] ?>">
    <form method="POST">
        <label>Cor de fundo:</label>
        <input type="color" name="cor" />
        <button> Enviar </button>
    </form>  
</body>
</html>