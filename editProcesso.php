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
<?php include("config/editProcesso/editStatus.php")?> 
   
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
  

Quantidade Total: <br>
<input type="number" name="quant"><br><br>  

Sobra: <br>
<input type="number" name="sobra"><br><br>  

Local: <br>
<input type="radio" name="visual" value="Mesa1"> Mesa 1 <br>  
<input type="radio" name="visual" value="Mesa2"> Mesa 2 <br>
<input type="radio" name="visual" value="Mesa3"> Mesa 3 <br> 
<input type="radio" name="visual" value="Mesa4"> Mesa 4 <br> 
<input type="radio" name="visual" value="Mesa5"> Mesa 5 <br><br>  


    
</div>

<button type="submit" name="salvar">Salvar</button>
  



</form>
</body>
</html>