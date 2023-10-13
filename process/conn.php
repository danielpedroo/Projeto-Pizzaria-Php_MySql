<?php

session_start();

//Variaveis que representam o Banco de dados
$user = "root";
$pass = "";
$db = "pizzaria";
$host = "localhost";


//Verificado de conexão
try {
    //conector com o banco de dados
    $conn = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);

    //alerta de se algo der errado e retornado a task
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch (PDOException $e) {

    //Mensagem de erro
    print "Erro" . $e->getMessage() . "<br>";
    die();
}

?>