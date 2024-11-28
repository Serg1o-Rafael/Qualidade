<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Document</title>
</head>
<body>
    <?php include("config/cadastro/cadastrar.php");?>
    <form action="" method="POST">

<style>
    .fonte{color:aliceblue;}
    </style>

<div class="fonte">
    <input type="number" name="op" require> OP <br>  
    <input type="text" name="cliente" required> Cliente <br>    
    <input type="number" name="pedido" required> Pedido <br>    
    <input type="date" name="data_entrega" required> Data de entrega <br>  
    <input type="radio" name="opcao1" value="Sim">Inspeção tipo Q <br>  
    <input type="radio" name="opcao2" value="Tem">Revestimento <br>   
</div>
    <button type="submit" name="salvar">SALVAR </button>
</form>
</html>