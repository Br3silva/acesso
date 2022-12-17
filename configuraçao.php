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
        <button onclick="teste" class="button_barralateral" type="button"><a href="./usuario.html" style="color:white;" href="./cadastro.php" style="text-decoration:none">HOME</a></button>
        <button onclick="teste" class="button_barralateral" type="button">DASHBOARD</button>
        <button class="button_barralateral" type="button">CONFIGURAÇAO</button>
        <button class="button_barralateral" type="button">USUARIOS</button>
        <button class="button_barralateral" type="button"><a  style="color:white;" href="./cadastro.php" style="text-decoration:none" >CADASTRAR</a></button>
    </div>
    </div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <script src="sweetalert2.all.min.js"></script>
</head>
<body>
<div class="barra_lateral">
    <div class="menubarralateral">
        
        <button onclick="teste" class="button_barralateral" type="button"><a href="./usuario.php" style="color:white;" href="./cadastro.php" style="text-decoration:none">HOME</a></button>
        <button onclick="teste" class="button_barralateral" type="button">DASHBOARD</button>
        <button class="button_barralateral" type="button">CONFIGURAÇAO</button>
        <button class="button_barralateral" type="button">USUARIOS</button>
        <button class="button_barralateral" type="button"><a  style="color:white;" href="./cadastro.php" style="text-decoration:none" >CADASTRAR</a></button>
    </div>
    </div>
   
<div>
    <div class="container_login">
        <div class="areaLogin">
            <h2>LOGIN</h2>
        <form action="validar.php" name="login" method="post">
        <label for="usuario">usuario</label>
        <!--funçao handle adiciona condicional a letra maiuscula -->
        <input id="func" type="text" name="usuario" value=" " type="button"  oninput="handleInput(event)"  required>
        <label for= "senha">senha</label>
        <!-- id func1 paraidentificar a funçao dentro da tag-->
        <input  id="func1" type="text" name="senha"  value=" "  oninput="handleInput(event)" required><br>
        <button type="submit" name="submit" id="submit">ENTRAR</button>
    </form>
    </div>
    </div>
    </div>
    <script src="./index.js" ></script>
    </body>
    </html>


</body>
</html>
