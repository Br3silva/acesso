<?php
include "./session.php";


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
    <div class="barra_lateral">
    <div class="menubarralateral">
       
        <button onclick="teste" class="button_barralateral" type="button">DASHBOARD</button>
        <button class="button_barralateral" type="button">CONFIGURAÇAO</button>
        <button class="button_barralateral" type="button">USUARIOS</button>
        <button class="button_barralateral" type="button"><a  style="color:white;" href="./cadastro.php" style="text-decoration:none" >CADASTRAR</a></button>
        <div >
            <div id="usuario"></div>
        <button class="btn_sair" type="button"><a href="./logout.php" class="btn_sair" type="button">SAIR</a></button>
        </div>
    </div>
    </div>
    
    <script src="./index.js" ></script>
    </body>
    </html>


</body>
</html>

