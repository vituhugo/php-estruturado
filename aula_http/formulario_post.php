
<!DOCTYPE HTML>
<html>  
<body>
<pre>
    <?php 
        // Exibe todos os valores que estão dentro da variável global $_POST
        // são os mesmos que estão na URL após o "?"
        var_dump($_POST);
    ?>
</pre>
    <form method="POST">
        Nome: <input type="text " name="nome"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
</body>
</html>
