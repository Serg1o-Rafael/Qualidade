<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/qualidade/css/inspf/logo_forjafix.css">
    <link rel="stylesheet" type="text/css" href="/qualidade/css/inspf/btns.css">
    <link rel="stylesheet" type="text/css" href="/qualidade/css/inspf/confirm_lib.css">
</head>
<body> 



    <form action="" method="POST">

    <h1> Confirmando a liberação da OP: <?php $op = $_GET["id"]; echo $op ?> </h1> 


    <h3> <input type="text" id="data" name="data" maxlength="10" onkeyup="mascaraData(this)" placeholder="Digite a data da liberação." required> <br>  
    <script> function mascaraData(input) { var valor = input.value; if (valor.length == 2 || valor.length == 5) { input.value += '/'; } } </script>
    </h3>

<a href="ops_liberadas.php">
<button type="submit" name="salvar" class="css/btn_salvar.css">Salvar</button></a>


<?php 

include("C:/xampp/htdocs/qualidade/conexao.php");

if(isset($_POST["salvar"])){


    $sql="SELECT * FROM MONITORAMENTO WHERE OP= '$op'";
    $result=mysqli_query($mysqli, $sql);
    $dados=mysqli_fetch_assoc($result);
    $op = $dados["OP"];
    $quant = $dados["QUANT_TOTAL"];
    $sobra = $dados["SOBRA"];
    $data= $_POST["data"];

    
    $sql2=mysqli_query($mysqli, "INSERT INTO OPS_LIBERADAS(OP,QUANT_TOTAL,SOBRA,DATA)
    VALUES('$op','$quant','$sobra','$data')");

$sqlDelete="DELETE FROM monitoramento where OP='$op'";
$resultDelete = mysqli_query($mysqli, $sqlDelete);
  

header("location: /qualidade/inspf/ops_liberadas.php");
}

?>















</form>
</body>