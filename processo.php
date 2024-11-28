<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Processo</title>
</head>
<body>
    
<form action="" method="POST">
<?php include("config/processo/status.php")?> 

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
SNQC <br>
<input type="radio" name="snqc" value="Finalizado"> Finalizado <br>  
<input type="radio" name="snqc" value="Em andamento"> Em andamento <br>  
<input type="radio" name="snqc" value="Não existe"> Não existe <br><br>  

Relatório Dimensional <br>
<input type="radio" name="rd" value="Finalizado"> Finalizado <br>  
<input type="radio" name="rd" value="Em andamento"> Em andamento <br><br>

Calibração <br>
<input type="radio" name="cal" value="Finalizado"> Finalizado <br>  
<input type="radio" name="cal" value="Em andamento"> Em andamento <br><br>  


Visual <br>
<input type="radio" name="visual" value="Finalizado"> Finalizado <br>  
<input type="radio" name="visual" value="Em andamento"> Em andamento <br><br>  
  

Quantidade Aprovada: <br>
<input type="number" name="quant"><br><br>  

Sobra: <br>
<input type="number" name="sobra"><br><br>  

Local: <br>
<input type="radio" name="visual" value="Aguardando Inspeção do Cliente"> Aguardando Inspeção do Cliente <br>  
<input type="radio" name="visual" value="Aguardando Inspeção"> Aguardando Inspeção <br>
<input type="radio" name="visual" value="Em Processo"> Em Processo <br><br>  
    
   

<button type="submit" name="salvar">Salvar</button>
  



</form>
</body>
</html>