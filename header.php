<?php
include_once("./process/pizza.php");

    $msg = "";
    
    if(isset($_SESSION["msg"])){

        $msg = $_SESSION["msg"];
        $status = $_SESSION["status"];

        $_SESSION["msg"] = "";
        $_SESSION["status"] = "";
        
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!--php css -->
    <link rel="stylesheet" href="./CSS.php/style.css">

    <!--Icone Pizzaria -->
    <link rel="shortcut icon" href="./Img.php/pizza.svg" type="image/x-icon">

    <!--BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu Pedido!</title>
</head>

<body>
    <!--Cabeçalho -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <a href="./index.php" class="navbar-brand">
                <img src="./Img.php/pizza.svg" alt="Pizzaria João" id="brand_logo">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar nav">
                    <li class="nav-item active">
                        <a href="./index.php" class="nav-link">Peça sua Pizza</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <?php if($msg != ""): ?>
    <div class="alert alert-<?= $status ?>">
        <p><?= $msg ?></p>
    </div>
    <?php endif; ?>