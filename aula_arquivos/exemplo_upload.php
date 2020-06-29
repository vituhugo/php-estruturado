<?php
/**
 * 1. Formulário com POST e enctype="multipart/form-data"
 * 2. Ter Inpyt tipo file com um name
 * 3. Onde foi recebido os dados, capturamos os dados no $_FILES
 * 4. Armazemos os dados em algum lugar através do 
 * $FILES['nome_do_input']['tmp_name'].
 */
if ($_POST) { // Quando existir os dados de POST, execute esse bloco.
    var_dump($_POST);
    var_dump($_FILES);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <p>
            Nome: <br />
            <input type="text" name="nome" />
        </p>
        <p>
            Gatinho: <br />
            <input type="file" name="gato" />
        </p>
        <p>
            Cachorrinho: <br />
            <input type="file" name="cachorro" />
        </p>
        <p>
            <input type="submit" />
        </p>
    </form>
</body>
</html>