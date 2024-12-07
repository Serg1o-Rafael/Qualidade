<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/qualidade/css/style.css">

    <title>Document</title>
</head>
<body>
    <style>

        .titulo-cadastrandoMaterial{color:aliceblue;}
        </style>
    <div class="titulo-cadastrandoMaterial">
    <h2>Cadastrando Material:</h2><br><br>
    </div>
    <?php include("config/cad_material_inspf/cadastrar.php");?>
    <form action="" method="POST">

<style>
    .fonte{color:aliceblue; text-align: justify; }

    </style>

<div class="fonte">
   <h3><input type="text" name="op" maxlength="15" require>  OP <br><br></h3>
   <h3><input type="text" name="cliente" required> Cliente <br>    <br></h3>
   <h3><input type="number" name="pedido" required> Pedido <br>    <br></h3> 
   <h3><input type="checkbox" id="iopcao1" name="opcao1" value="Inspeção tipo Q">Inspeção tipo Q <br></h3>   
   <h3><input type="checkbox" id="iopcao2" name="opcao2" value="Com Revestimento">Com Revestimento <br> </h3>   
   <h3><input type="checkbox" id="iopcao3" name="opcao3" value="Sem Revestimento">Sem Revestimento<br><br></h3> 
   <input type="text" id="data" name="data_entrada" maxlength="10" onkeyup="mascaraData(this)" placeholder="Dia/Mês/Ano">Data de Entrada<br><br>
   <input type="text" id="data" name="data_entrega" maxlength="10" onkeyup="mascaraData(this)" placeholder="Dia/Mês/Ano">Data de Entrega<br><br>

   <script> function mascaraData(input) { var valor = input.value; if (valor.length == 2 || valor.length == 5) { input.value += '/'; } } </script>



   <h3><button type="submit" name="salvar">SALVAR </button></h3> 
</div>
    <
</form>
</html>