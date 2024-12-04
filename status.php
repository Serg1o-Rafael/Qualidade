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
<select name="op" required>
<option value="Selecione" selected>Selecione a OP</option>
<?php include("config/conexao.php");
$sql= mysqli_query($mysqli,"SELECT OP from info_material");
while($result =mysqli_fetch_assoc($sql)) {;?>
<option value="<?php echo $result['OP'] ?>"> 
<?php echo $result['OP'];}
?>
</option> 
</select>  <br> <br>  

<h4>SNQC</h4>
<input type="checkbox" name="snqc1" id="isnqc1" value="Finalizado"> Finalizado <br>  
<input type="checkbox" name="snqc2" id="isnqc2" value="Em andamento"> Em andamento <br>  
<input type="checkbox" name="snqc3" id="isnqc3" value="Não existe"> Não existe <br>

<h4>Relatório Dimensional</h4>
<input type="checkbox" name="rd1" id="ird1" value="Finalizado"> Finalizado <br>  
<input type="checkbox" name="rd2" id="ird2" value="Em andamento"> Em andamento <br>

<h4>Calibração</h4>
<input type="checkbox" name="cal1" id="ical1" value="Finalizado"> Finalizado <br>  
<input type="checkbox" name="cal2" id="ical2" value="Em andamento"> Em andamento <br> 


<h4>Visual</h4>
<input type="checkbox" name="visual1" id="ivisual1" value="Finalizado"> Finalizado <br>  
<input type="checkbox" name="visual2" id="ivisual2" value="Em andamento"> Em andamento <br><br>  
  

Quantidade Total: <br>
<input type="number" name="quant"><br><br>  

Sobra: <br>
<input type="number" name="sobra"></input><br><br>  


Local: <br>
<input type="checkbox" name="aguardando_insp" id="iaguardando_insp" value="Aguardando Inspeção"> Aguardando Inspeção <br>  
<input type="checkbox" name="mesa1" id="imesa1" value="Mesa 1"> Mesa 1 <br>  
<input type="checkbox" name="mesa2" id="imesa2" value="Mesa 2"> Mesa 2 <br>
<input type="checkbox" name="mesa3" id="imesa3" value="Mesa 3"> Mesa 3 <br> 
<input type="checkbox" name="mesa4" id="imesa4" value="Mesa 4"> Mesa 4 <br> 
<input type="checkbox" name="mesa5" id="imesa5" value="Mesa 5"> Mesa 5 <br> 
<input type="checkbox" name="insp_cliente" id="i_insp_cliente" value="Inspeção do Cliente">Inspeção do Cliente<br><br> 


    
</div>

<button type="submit" name="salvar">Salvar</button>
  



</form>
</body>
</html>