<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php
if(isset($_POST['submit']))
{

    $email = $_POST['usuario'];
    $senha = $_POST['senha'];

    print_r($email);
    print_r( $senha );
}
?>
    <div>
        <div class="container_login">
            <div class="areaLogin">
            <h2>Acesso</h2>
        <form action="formulario.php" name="form" methossd="post">
        <label for="usuario">usuario</label>
        <input type="text" name="usuario" type="button" value="">
        <label for="senha">senha</label>
        <input type="text" name="senha" type="button" value=""><br>
        <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
    </div>
    <script src="./index.js" ></script>
    </body>
    </html>