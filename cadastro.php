<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("config/cadastro/cadastrar.php");?>
    <form action="" method="POST">

    <input type="number" name="op" require> OP <br>  
    <input type="text" name="cliente" required> Cliente <br>    
    <input type="text" name="tipo_insp" required> Tipo de inspeção <br>  
    <input type="number" name="pedido" required> Pedido <br>  
    <input type="number" name="quant" required> Quantidade <br>  
    <input type="date" name="data_entrega" required> Data de entrega <br>  
    <input type="radio" name="snqc"> SNQC <br><br>  

    <button type="submit" name="salvar">SALVAR </button>
</form>
</html>