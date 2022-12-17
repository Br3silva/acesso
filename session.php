<?php

if(!isset($_SESSION)){

session_start();}

if(!isset($_SESSION['id'])){


    die("voçe nao pode acessar essa pagina");
    
}



?>