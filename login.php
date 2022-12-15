

<?php
//incluir arquivo
include_once('config.php');

if(isset($_POST['submit'])){
print_r('<br>');
print_r('Nome: ' . $_POST['usuario']);
print_r('<br>');
print_r('Email: ' . md5($_POST['senha']));

$nome = $_POST['usuario'];
$senha = MD5($_POST['senha']);

$result = mysqli_query($conexao, "INSERT INTO tbl_acesso (usuario,senha) 
VALUES ('$nome','$senha')");

}
?>

