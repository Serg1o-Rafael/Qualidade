<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/qualidade/css/inspf/body.css">
    <link rel="stylesheet" type="text/css" href="/qualidade/css/inspf/btn_salvar.css">
    <link rel="stylesheet" type="text/css" href="/qualidade/css/inspf/cad_monitoramento.css">


    <title>Inserir Processo</title>
</head>
<body>
  

<h1> Cadastrando ao Monitoramento: </h1>

<?php include("config/cad_monitoramento_inspf/cadastrar.php");?>


<form action="" method="POST">

    <div class="campos2">
        <div class="local">
<h4>Local</h4>
<input type="checkbox" name="local" id="iaguardando_insp" value="Recepção">Recepção<br>  
<input type="checkbox" name="local" id="i_insp" value="Inspeção">Inspeção<br>  
<input type="checkbox" name="local" id="i_insp_cliente" value="Cliente">Cliente<br><br>
        </div>


<div class="quant">

<h4>Quantidade Total</h4>
<input type="number" name="quant"> 
<h4>Sobra</h4>
<input type="number" name="sobra">  
        </div>
    </div>

<input type="hidden" name="id" value="<?php $id=$_GET["id"]; echo $id; ?>"> 

    
</div>
<button type="submit" name="salvar">SALVAR</button>



</form>
</body>
</html>