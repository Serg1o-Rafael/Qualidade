<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/body.css">

    <title>Inserir Processo</title>
</head>
<body>
   <style>
    .fonte{color:aliceblue;}
    </style>
<?php include("config/edit_monitoramento_inspf/dados_monitoramento.php")?> 
   
<form action="config/edit_monitoramento_inspf/salvar_monitoramento.php" method="POST">
    
<!-- Seleciona as OP's cadastradas no banco de dados-->
<div class="fonte">
 
OP <br>
<h3><input type="text" name="op" value="<?php echo $op;?>" maxlength="15" require><br></h3>


SNQC <br>
<input type="checkbox" name="snqc" id="isnqc1" value="Finalizado" <?php echo $snqc == "Finalizado" ? "checked" : ""?> > Finalizado <br>  
<input type="checkbox" name="snqc" id="isnqc2" value="Em andamento"<?php echo $snqc == "Em andamento" ? "checked" : ""?>> Em andamento <br>
<input type="checkbox" name="snqc" id="isnqc3" value="Não existe"<?php echo $snqc == "Não existe" ? "checked" : ""?>> Não existe <br> <br>

Relatório Dimensional <br>
<input type="checkbox" name="rd" id="ird1" value="Finalizado" <?php echo $rd == "Finalizado" ? "checked" : ""?>> Finalizado <br>  
<input type="checkbox" name="rd" id="ird2" value="Em andamento" <?php echo $rd == "Em andamento" ? "checked" : ""?>> Em andamento <br><br>

Calibração <br>
<input type="checkbox" name="cal" id="ical1" value="Finalizado"<?php echo $cal == "Finalizado" ? "checked" : ""?>> Finalizado <br>  
<input type="checkbox" name="cal" id="ical2" value="Em andamento"<?php echo $cal == "Em andamento" ? "checked" : "" ?>> Em andamento <br><br>  


Visual <br>
<input type="checkbox" name="visual" id="ivisual1" value="Finalizado" <?php echo $visual == "Finalizado" ? "checked" : ""?>> Finalizado <br>  
<input type="checkbox" name="visual" id="ivisual2" value="Em andamento" <?php echo $visual == "Em andamento" ? "checked" : ""?>> Em andamento<br><br>  
  

Quantidade Total: <br>
<input type="number" name="quant" value="<?php echo $quant;?>"><br><br>  

Sobra: <br>
<input type="number" name="sobra" value="<?php echo $sobra;?>"><br><br>  




Local: <br>
<input type="checkbox" name="local" id="iaguardando_insp" value="Aguardando Inspeção"<?php echo $local == "Aguardando Inspeção" ? "checked" : ""?>>Aguardando Inspeção<br>  
<input type="checkbox" name="local" id="imesa1" value="Mesa1"<?php echo $local == "Mesa 1" ? "checked" : ""?>> Mesa 1 <br>  
<input type="checkbox" name="local" id="imesa2" value="Mesa2"<?php echo $local == "Mesa 2" ? "checked" : ""?>> Mesa 2 <br>
<input type="checkbox" name="local" id="imesa3" value="Mesa3"<?php echo $local == "Mesa 3" ? "checked" : ""?>> Mesa 3 <br> 
<input type="checkbox" name="local" id="imesa4" value="Mesa4"<?php echo $local == "Mesa 4" ? "checked" : ""?>> Mesa 4 <br> 
<input type="checkbox" name="local" id="imesa5" value="Mesa5"<?php echo $local == "Mesa 5" ? "checked" : ""?>> Mesa 5 <br> 
<input type="checkbox" name="local" id="i_insp_cliente" value="Inspeção do Cliente" <?php echo $local == "Inspeção do Cliente" ? "checked" : ""?>>Inspeção do Cliente<br><br> 

<input type="hidden" name="id" value="<?php echo $id;?>">

</div>

<button type="update" name="update">Salvar</button>
  



</form>
</body>
</html>