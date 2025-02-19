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

<?php include("config/edit_monitoramento_inspf/dados_monitoramento.php")?> 

<form action="config/edit_monitoramento_inspf/salvar_monitoramento.php" method="POST">


<form action="" method="POST">

OP <br>
<h3><input type="text" name="op" value="<?php echo $op;?>" maxlength="15" require><br></h3>



    <div class="campos2">
        <div class="local">
<h4>Local</h4>
<input type="checkbox" name="local" id="iaguardando_insp" value="Recepção"><?php echo $local == "Recepção" ? "checked" : ""?> Recepção <br>
<input type="checkbox" name="local" id="i_insp" value="Inspeção"><?php echo $local == "Inspeção" ? "checked" : ""?>Inspeção<br>
<input type="checkbox" name="local" id="i_insp_cliente" value="Cliente"><?php echo $local == "Cliente" ? "checked" : ""?>Cliente<br><br>
        </div>


        <div class="quant">
<h4>Quantidade Total</h4>
<input type="number" name="quant"  value="<?php echo $quant;?>"><br>   
<h4>Sobra</h4>
<input type="number" name="sobra" value="<?php echo $sobra;?>"><br>  
>  
        </div>
    </div>

    <input type="hidden" name="id" value="<?php echo $id;?>">
    
</div>
<button type="update" name="update">SALVAR</button>



</form>
</body>
</html>