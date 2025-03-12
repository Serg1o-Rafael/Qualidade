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
   
    <h1>Cadastrando Material:</h1><br>
  
    <?php include("config/cad_material_inspf/cadastrar.php");?>
    <form action="" method="POST">


    <h3>
    <div class="tudo">    
        <div class="campos">
    <h4>Obrigatório:</h4> 
    <input type="text"   name="op" maxlength="15" required>  OP <br>
    <input type="text"   name="cliente" required>Cliente <br>   
    <input type="number" name="pedido" required>Pedido  <br> <br>  
        </div>
    
        <div class="campos2">
        <h4>Revestimento/Tipo:</h4>
   <input    type="checkbox" id="iopcao1" name="revestimento" value="Inspeção tipo Q"> Inspeção Tipo Q    <br>
   <input    type="checkbox" id="iopcao2" name="revestimento" value="Cadmiado Amarelo"> Cadmiado Amarelo     <br>   
   <input    type="checkbox" id="iopcao3" name="revestimento" value="Cadmiado Verde-Oliva"> Cadmiado Verde-Oliva <br>   
   <input    type="checkbox" id="iopcao3" name="revestimento" value="Xylan Cinza"> Xylan Cinza  <br>      
   <input    type="checkbox" id="iopcao3" name="revestimento" value="Xylan Azul"> Xylan Azul         <br>  
   <input    type="checkbox" id="iopcao3" name="revestimento" value="Sem Revestimento"> Sem Revestimento <br>
   <input    type="checkbox" id="iopcao3" name="revestimento" value="Zinco Eletrolítico"> Zinco Eletrolítico <br>   

   <input    type="text"     id="data"    name="data_entrada" maxlength="10" onkeyup="mascaraData(this)" placeholder="Dia/Mês/Ano" required> Data de Entrada   <br>  
   <input    type="text"     id="data"    name="data_entrega" maxlength="10" onkeyup="mascaraData(this)" placeholder="Dia/Mês/Ano" required> Data de Entrega  <br>  
        </div>
    </div>      
    </h3>
    
   
   
     <button type="submit" name="salvar">SALVAR </button>
    


<script> function mascaraData(input) { var valor = input.value; if (valor.length == 2 || valor.length == 5) { input.value += '/'; } } </script>
</form>
</html>