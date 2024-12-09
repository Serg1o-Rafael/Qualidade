<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/qualidade/css/body.css">

    <title>Document</title>
</head>
<body>
    <style>

        .titulo-cadastrandoMaterial{color:aliceblue;}
        </style>
    <div class="titulo-cadastrandoMaterial">
    <h2>Cadastrando Material:</h2><br><br>
    </div>
    <?php include("config/edit_material_inspf/dados_material.php");?>

    <form action="config/edit_material_inspf/salvar_material.php" method="POST">

<style>
    .fonte{color:aliceblue; text-align: justify; }

    </style>

<div class="fonte">
   <h3><input type="text" name="op" maxlength="15" require value="<?php echo $op; ?>">  OP <br><br></h3>
   <h3><input type="text" name="cliente" required value="<?php echo $cliente; ?>"> Cliente <br>    <br></h3>
   <h3><input type="number" name="pedido" required value="<?php echo $pedido; ?>"> Pedido <br>    <br></h3> 
   <h3><input type="checkbox" id="iopcao2" name="tratamento2" value="0"<?php echo $revestimento == "1" ? "checked" : "";?>>Com Revestimento <br> </h3>   
   <h3><input type="checkbox" id="iopcao3" name="sem_revestimento" value="Sem Revestimento">Sem Revestimento<br><br></h3> 
   <input type="text" id="data" name="data_entrada" maxlength="10" onkeyup="mascaraData(this)" placeholder="Dia/Mês/Ano" value="<?php echo $data_entrada; ?>">Data de Entrada<br><br>
   <input type="text" id="data" name="data_entrega" maxlength="10" onkeyup="mascaraData(this)" placeholder="Dia/Mês/Ano" value="<?php echo $data_entrega; ?>">Data de Entrega<br><br>


   <input type="hidden" name="id" value="<?php echo $id;?>">
   <script> function mascaraData(input) { var valor = input.value; if (valor.length == 2 || valor.length == 5) { input.value += '/'; } } </script>



   <h3><button type="update" name="update">SALVAR </button></h3> 
</div>
    <
</form>
</html>