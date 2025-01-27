<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/body.css">
    <link rel="stylesheet" type="text/css" href="css/btn_salvar.css">
    <link rel="stylesheet" type="text/css" href="css/cad_monitoramento.css">


    <title>Inserir Processo</title>
</head>
<body>
  

<h1> Cadastrando o Monitoramento: </h1>

<?php include("config/cad_monitoramento_inspf/cadastrar.php");?>


<form action="" method="POST">
<div class="tudo">    
    <div class="campos">
        <div class="snqc">
<h4>SNQC</h4>
<input type="checkbox" name="snqc" id="isnqc1" value="OK"> OK<br>  
<input type="checkbox" name="snqc" id="isnqc2" value="Não"> Não <br>  
<input type="checkbox" name="snqc" id="isnqc3" value="Não consta"> Não consta <br>
        </div>

        <div class="rd">
<h4>Relatório Dimensional</h4>
<input type="checkbox" name="rd" id="ird1" value="OK"> OK <br>  
<input type="checkbox" name="rd" id="ird2" value="Não"> Não <br>
        </div>

    

 
    </div>

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

<input type="hidden" name="op" value="<?php $op=$_GET["id"]; echo $op; ?>"> 
    
</div>
<button type="submit" name="salvar">SALVAR</button>



</form>
</body>
</html>