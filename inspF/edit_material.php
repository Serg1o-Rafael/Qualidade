<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/qualidade/css/inspf/body.css">
    <link rel="stylesheet" type="text/css" href="/qualidade/css/inspf/btn_salvar.css">
    <link rel="stylesheet" type="text/css" href="/qualidade/css/inspf/cad_material.css">


    <title>Document</title>
</head>
<body>
   
<?php include("config/edit_material_inspf/dados_material.php");?>

<form action="config/edit_material_inspf/salvar_material.php" method="POST">


    <h1>Cadastrando Material:</h1><br>
  


    <h3>
    <div class="tudo">    
        <div class="campos">
    <h4>Obrigatório:</h4> 
    <input type="text"   name="op" value="<?php echo $op; ?>" maxlength="15" require>OP<br>
    <input type="text"   name="cliente" value="<?php echo $cliente; ?> " required>Cliente        <br>   
    <input type="number" name="pedido" value="<?php echo $pedido; ?>" required>Pedido  <br> <br>  
        </div>
    
        <div class="campos2">
        <h4>Característica</h4>
   <input    type="checkbox" id="iopcao1" name="revestimento" value="Inspeção tipo Q" <?php echo $revestimento == "Inspeção tipo Q" ? "checked" : ""; ?> >Inspeção Tipo Q    <br>
   <input    type="checkbox" id="iopcao2" name="revestimento" value="Cadium Amarelo" <?php echo $revestimento == "Cadium Amarelo" ? "checked" : ""; ?> >Cadium Amarelo     <br>   
   <input    type="checkbox" id="iopcao3" name="revestimento" value="Cadium Verde-Oliva" <?php echo $revestimento == "Cadium Verde-Oliva" ? "checked" : ""; ?> >Cadium Verde-Oliva <br>   
   <input    type="checkbox" id="iopcao3" name="revestimento" value="Xylan Cinza"<?php echo $revestimento == "Xylan Cinza" ? "checked" : ""; ?>>Xylan Cinza  <br>      
   <input    type="checkbox" id="iopcao3" name="revestimento" value="Xylan Azul"<?php echo $revestimento == "Xylan Azul" ? "checked" : ""; ?> >Xylan Azul         <br>  
   <input    type="checkbox" id="iopcao3" name="revestimento" value="Sem Revestimento" <?php echo $revestimento == "Sem Revestimento" ? "checked" : ""; ?> >Sem Revestimento <br> <br>  
   <input    type="text"     id="data"    name="data_entrada" maxlength="10" onkeyup="mascaraData(this)" placeholder="Dia/Mês/Ano" value="<?php echo $data_entrada;?>">Data de Entrada   <br>  
   <input    type="text"     id="data"    name="data_entrega" maxlength="10" onkeyup="mascaraData(this)" placeholder="Dia/Mês/Ano" value="<?php echo $data_entrega;?>">Data de Entrega  <br>  
        </div>
    </div>      
    </h3>
    <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
   
   
     <button type="update" name="update">SALVAR </button>
    


<script> function mascaraData(input) { var valor = input.value; if (valor.length == 2 || valor.length == 5) { input.value += '/'; } } </script>
</form>
</html>