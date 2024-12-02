<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Inserir Processo</title>
</head>
<body>
   <style>
    .fonte{color:aliceblue;}
    </style>

<?php include("config/status/status.php");?>


<form action="" method="POST">
<div class="fonte">
<h4>SNQC</h4>
<input type="radio" name="snqc" value="Finalizado"> Finalizado <br>  
<input type="radio" name="snqc" value="Em andamento"> Em andamento <br>  
<input type="radio" name="snqc" value="Não existe"> Não existe <br>

<h4>Relatório Dimensional</h4>
<input type="radio" name="rd" value="Finalizado"> Finalizado <br>  
<input type="radio" name="rd" value="Em andamento"> Em andamento <br>

<h4>Calibração</h4>
<input type="radio" name="cal" value="Finalizado"> Finalizado <br>  
<input type="radio" name="cal" value="Em andamento"> Em andamento <br> 


<h4>Visual</h4>
<input type="radio" name="visual" value="Finalizado"> Finalizado <br>  
<input type="radio" name="visual" value="Em andamento"> Em andamento <br><br>  
  

Quantidade Total: <br>
<input type="number" name="quant"><br><br>  

Sobra: <br>
<input type="number" name="sobra"><br><br>  

Local: <br>
<input type="radio" name="mesa1" value="Mesa 1"> Mesa 1 <br>  
<input type="radio" name="mesa2" value="Mesa 2"> Mesa 2 <br>
<input type="radio" name="mesa3" value="Mesa 3"> Mesa 3 <br> 
<input type="radio" name="mesa4" value="Mesa 4"> Mesa 4 <br> 
<input type="radio" name="mesa5" value="Mesa 5"> Mesa 5 <br> 
<input type="radio" name="insp_cliente" value="Inspeção do Cliente">Inspeção do Cliente<br><br> 



    
</div>

<button type="submit" name="salvar">Salvar</button>
  



</form>
</body>
</html>