<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE){
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
    
    <div>
    <h1>Cadastro de Produtos</h1>
        <form action="produtos.php" method="post">
            <div class="form-group">
                <label>Nome do produto</label>
                <input type="text" name="nomeproduto" class="form-control">
                <span class="help-block"></span>
            </div>  
            <br>
            <div class="form-group">
                <label>Código de baras</label>
                <input type="numeric" name="codigo" class="form-control">
                <span class="help-block"></span>
            </div>
            <br>
            <div class="form-group">
                <label>Quantidade em estoque</label>
                <input type="numeric" name="quantidade" class="form-control">
                <span class="help-block"></span>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-info" value="Cadastrar">
            </div>
        </form>
        <form action="inicio.php">
        <div class="form-group">
                <input type="submit" class="btn btn-info" value="Voltar">
        </div>
        </form>
    </div>
</body>
</html>