<?php
// Verifica se o post foi enviado.
if ($_POST) {
    // Valida se a senha é igual a confirmação.
    if ($_POST['senha'] !== $_POST['confirmacao']) {
        echo "senha é diferente da confirmação";
    } else {
        //Guarda os dados do POST em uma nova variável
        $cadastro = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => password_hash($_POST['senha']),
        ];

        //Verifica se o $_FILES existe
        if ($_FILES) {
            // A função move_uploaded_file move um arquivo de um lugar para outro.
            // Utilizamos ela para manipular o arquivo temporário para a pasta do projeto
            move_uploaded_file($_FILES['foto']['tmp_name'], $_FILES['foto']['name']);

            // Guardamos o caminho da foto dentro do array $cadastro 
            // antes de transformarmos em json.
            $cadastro['foto'] = $_FILES['foto']['name'];
        }
        
        // Transformamos a variável cadastro em uma string 
        // JSON para armazenar no arquivo
        $string_json = json_encode($cadastro);
        // Com a função do PHP file_put_contents criamos o arquivo
        // cadastros.json e jogamos o valor da variável 
        // $string_json para dentro dele.
        file_put_contents('cadastros.json', $string_json);
    }
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
            <label for="">Nome</label>
            <input type="text" name="nome">
        </p>
        <p>
            <label for="">Email</label>
            <input type="email" name="email">
        </p>
        <p>
            <label for="">Senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <label for="">Confirmação de Senha</label>
            <input type="password" name="confirmacao">
        </p>
        <p>
            <label for="">Foto</label>
            <input type="file" name="foto">
        </p>
        <p>
            <input type="submit" />
        </p>
    </form>
</body>
</html>