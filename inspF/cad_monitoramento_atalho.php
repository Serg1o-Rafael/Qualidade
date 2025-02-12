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
  

<h1> Cadastrando o Monitoramento: </h1>

<?php include("config/cad_monitoramento_inspf/cadastrar.php");?>


<form action="" method="POST">
<div class="tudo">    
    <div class="campos">
        <div class="snqc">
<h4>SNQC</h4>
<input type="checkbox" name="snqc" id="isnqc1" value="Finalizado"> Finalizado <br>  
<input type="checkbox" name="snqc" id="isnqc2" value="Em andamento"> Em andamento <br>  
<input type="checkbox" name="snqc" id="isnqc3" value="Não existe"> Não existe <br>
        </div>

        <div class="rd">
<h4>Relatório Dimensional</h4>
<input type="checkbox" name="rd" id="ird1" value="Finalizado"> Finalizado <br>  
<input type="checkbox" name="rd" id="ird2" value="Em andamento"> Em andamento <br>
        </div>

        <div class="cal">
<h4>Calibração</h4>
<input type="checkbox" name="cal" id="ical1" value="Finalizado"> Finalizado <br>  
<input type="checkbox" name="cal" id="ical2" value="Em andamento"> Em andamento <br> 
        </div>

        <div class="visual">
<h4>Visual</h4>
<input type="checkbox" name="visual" id="ivisual1" value="Finalizado"> Finalizado <br>  
<input type="checkbox" name="visual" id="ivisual2" value="Em andamento"> Em andamento <br><br>  
        </div>  
    </div>

    <div class="campos2">
        <div class="local">
<h4>Local</h4>
<input type="checkbox" name="local" id="iaguardando_insp" value="Aguardando Inspeção"> Aguardando Inspeção <br>  
<input type="checkbox" name="local" id="imesa1" value="Mesa 1"> Mesa 1 <br>  
<input type="checkbox" name="local" id="imesa2" value="Mesa 2"> Mesa 2 <br>
<input type="checkbox" name="local" id="imesa3" value="Mesa 3"> Mesa 3 <br> 
<input type="checkbox" name="local" id="imesa4" value="Mesa 4"> Mesa 4 <br> 
<input type="checkbox" name="local" id="imesa5" value="Mesa 5"> Mesa 5 <br> 
<input type="checkbox" name="local" id="i_insp_cliente" value="Inspeção do Cliente">Inspeção do Cliente<br><br>
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