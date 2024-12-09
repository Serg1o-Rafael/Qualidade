<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/retrabalho.css">

   

    <title>Inserir Processo</title>
</head>
<body>

<div class="titulo">Retrabalho (Inspeção Final)</div>


<form action="" method="POST">
  
  
<div class="op_espec">
    <div class="op">

<h1>Ordem de Produção:</h1>
<input type="text" name="op" id="op" placeholder="Insira o número da OP com problemas."> <br>  
    </div>

<div class="text_area">
<h1>Especificação:</h1>
<textarea placeholder="Escreva o motivo pelo pedido de retrabalho..."></textarea><br>
</div>
</div>
        
<div class="quant">
<h1>Quantidade Absoluta:</h1>
<input type="number" name="quant" id="quant" placeholder="Insíra a quantidade selecionada para o envio do retrabalho."> <br> 
</div>
      



<div class="data_salvar">
    <div class="data">
<h1>Data:</h1>
<input    type="text"     id="data"    name="data_entrada" maxlength="10" onkeyup="mascaraData(this)" placeholder="Insira a data exata deste pedido de retrabalho."><br>  
 <br>  
<button type="submit" name="salvar">SALVAR</button>
</div>     
</div>
<h1>Saida:</h1>
<input    type="text"     id="data"    name="data_entrada" maxlength="10" onkeyup="mascaraData(this)" placeholder="Insira a data da saida do material para o retrabalho.">   <br>  
  
</div>
      
    


 




<script> function mascaraData(input) { var valor = input.value; if (valor.length == 2 || valor.length == 5) { input.value += '/'; } } </script>

</form>
</body>
</html>