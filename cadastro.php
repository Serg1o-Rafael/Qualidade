<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Document</title>
</head>
<body>
    <style>

        .titulo-cadastrandoMaterial{color:aliceblue;}
        </style>
    <div class="titulo-cadastrandoMaterial">
    <h2>Cadastrando Material:</h2><br><br>
    </div>
    <?php include("config/cadastro/cadastrar.php");?>
    <form action="" method="POST">

<style>
    .fonte{color:aliceblue; text-align: justify; }

    </style>

<div class="fonte">
   <h3><input type="number" name="op" require>  OP <br><br></h3>
   <h3><input type="text" name="cliente" required> Cliente <br>    <br></h3>
   <h3><input type="number" name="pedido" required> Pedido <br>    <br></h3> 
   <h3><input type="date" name="data_entrega" required> Data de entrega <br>  <br></h3> 
   <h3><input type="radio" name="opcao1" value="Inspeção tipo Q">Inspeção tipo Q <br></h3>   
   <h3><input type="radio" name="opcao2" value="Com Revestimento">Com Revestimento <br> </h3>   
   <h3><input type="radio" name="opcao3" value="Sem Revestimento">Sem Revestimento<br><br></h3> 
   <h3><button type="submit" name="salvar">SALVAR </button></h3> 
</div>
    <
</form>
</html>