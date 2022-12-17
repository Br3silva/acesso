<?php

include_once 'conectBd.php' ;

if (isset($_POST['senha']) || isset ($_POST['usuario'])){

if (strlen($_POST['usuario']) == 0 ){

echo "preencha o campo usuario";
print_r("preencha o campo usuario") ;

} else if (strlen($_POST['senha']) == 0 ){

    echo "preencha o campo senha";}

    else{
        //proteçao contra injection
        $usuario = $conexao->real_escape_string($_POST['usuario']);
        $senha = $conexao->real_escape_string ($_POST['senha']);
        $senhaCript = md5($senha);
       
        // consulta banco de dados 
        $sqlcode_code = "SELECT * FROM cadastro1 WHERE usuario = '$usuario' AND senha = '$senhaCript'" ;
        //iniciando consulta com conexao com banco de dados
        $sql_consulta = $conexao ->query($sqlcode_code) or die("falha ao conectar". $conexao->error);
        //quantidade de linhas encontradas com usuario e senha
        $quantidade = $sql_consulta->num_rows;
        
        // ccondiçao de comparaçao logica com busca banco de dados
        if($quantidade == 1){

          $usuario = $sql_consulta-> fetch_assoc();
          //print_r ([$usuario]);
          //print_r ([$usuario["usuario"]]);
            if(!isset($_SESSION)){
            session_start();
        }
        //buscar dados da coluna selecionada
        $_SESSION['user'] = $usuario['usuario'];
        $_SESSION['id'] = $usuario['id'];
        // verificar dados dentro da array
        //print_r ([$_SESSION]);
        echo "entrou na seçao";

        header("location: home.php");

        }
        else {
            echo "falha ao logar";


        }

    }
    }











?>
