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
<?php include("config/editStatus/editStatus.php")?> 
   
<form action="/qualidade/config/editStatus/salvarEditStatus.php" method="POST">
    
<!-- Seleciona as OP's cadastradas no banco de dados-->
<div class="fonte">
<select name="op" required>
<option value="Selecione" selected><?php echo $op;?></option>
<?php include("config/conexao.php");
$sql= mysqli_query($mysqli,"SELECT OP from info_material");
while($result =mysqli_fetch_assoc($sql)) {;?>
<option value="<?php echo $result['OP'] ?>"> 
<?php echo $result['OP'];}
?>
</option> 
</select>  <br> <br>  
SNQC <br>
<input type="radio" name="snqc" value="Finalizado" <?php echo $snqc == "Finalizado" ? "checked" : ""?> > Finalizado <br>  
<input type="radio" name="snqc" value="Em andamento"<?php echo $snqc == "Em andamento" ? "checked" : ""?>> Em andamento <br>
<input type="radio" name="snqc" value="Não existe"<?php echo $snqc == "Não existe" ? "checked" : ""?>> Não existe <br> <br>

Relatório Dimensional <br>
<input type="radio" name="rd" value="Finalizado" <?php echo $rd == "Finalizado" ? "checked" : ""?>> Finalizado <br>  
<input type="radio" name="rd" value="Em andamento" <?php echo $rd == "Em andamento" ? "checked" : ""?>> Em andamento <br><br>

Calibração <br>
<input type="radio" name="cal" value="Finalizado"<?php echo $cal == "Finalizado" ? "checked" : ""?>> Finalizado <br>  
<input type="radio" name="cal" value="Em andamento"<?php echo $cal == "Em andamento" ? "checked" : "" ?>> Em andamento <br><br>  


Visual <br>
<input type="radio" name="visual" value="Finalizado" <?php echo $visual == "Finalizado" ? "checked" : ""?>> Finalizado <br>  
<input type="radio" name="visual" value="Em andamento" <?php echo $visual == "Em andamento" ? "checked" : ""?>> Em andamento<br><br>  
  

Quantidade Total: <br>
<input type="number" name="quant" value="<?php echo $quant;?>"><br><br>  

Sobra: <br>
<input type="number" name="sobra" value="<?php echo $sobra;?>"><br><br>  

Local: <br>
<input type="radio" name="mesa1" value="Mesa1"<?php echo $local == "Mesa 1" ? "checked" : ""?>> Mesa 1 <br>  
<input type="radio" name="mesa2" value="Mesa2"<?php echo $local == "Mesa 2" ? "checked" : ""?>> Mesa 2 <br>
<input type="radio" name="mesa3" value="Mesa3"<?php echo $local == "Mesa 3" ? "checked" : ""?>> Mesa 3 <br> 
<input type="radio" name="mesa4" value="Mesa4"<?php echo $local == "Mesa 4" ? "checked" : ""?>> Mesa 4 <br> 
<input type="radio" name="mesa5" value="Mesa5"<?php echo $local == "Mesa 5" ? "checked" : ""?>> Mesa 5 <br> 
<input type="radio" name="insp_cliente" value="Inspeção do Cliente" <?php echo $local == "Inspeção do Cliente" ? "checked" : ""?>>Inspeção do Cliente<br><br> 

<input type="hidden" name="op" value="<?php echo $op; ?>"> 
</div>

<button type="update" name="update">Salvar</button>
  



</form>
</body>
</html>