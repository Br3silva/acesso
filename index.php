

?>



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
   
<div>
    <div class="container_login">
        <div class="areaLogin">
            <h2>Acesso</h2>
        <form action="index.php" name="form" method="post">
        <label for="usuario">usuario</label>
        <!--funçao handle adiciona condicional a letra maiuscula -->
        <input id="func" type="text" name="usuario" value=" " type="button" required oninput="handleInput(event)" required>
        <label for= "senha">senha</label>
        <!-- id func1 paraidentificar a funçao dentro da tag-->
        <input  id="func1" type="text" name="senha"  value=" " required  oninput="handleInput(event)" required><br>
        <button type="submit" name="submit" id="submit">Enviar</button>
    </form>
    </div>
    </div>
    </div>
    <script src="./index.js" ></script>
    </body>
    </html>

    <?php
//incluir arquivos
include_once('config.php');

if(isset($_POST['submit'])){
/*('<br>');
print_r('Nome: ' . $_POST['usuario']);
print_r('<br>');
print_r('Email: ' . md5($_POST['senha']));*/

$nome = $_POST['usuario'];
$senha = MD5($_POST['senha']);


$result = mysqli_query($conexao, "INSERT INTO cadastro (id,usuario,senha) 
        VALUES ('','$nome','$senha')");


//$result = mysqli_query($conexao, "INSERT INTO `cadastro` ( `Usuario`, `senha`) 
//VALUES ('$nome','$senha')");

  header('Location: index.php');

}
