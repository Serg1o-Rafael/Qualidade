<?php

if(isset($_POST["salvar"])){

include("C:/xampp/htdocs/qualidade/conexao.php");

$op = $_POST["op"];
$quant = $_POST["quant"];
$espcf = $_POST["espcf"];
$data = $_POST["data"];
$retorno = $_POST["retorno"];


$sqlId= mysqli_query($mysqli, "SELECT * FROM ops where OP = '$op'");
   $result=mysqli_fetch_assoc($sqlId);
    $id=$result['ID'];


$sql= mysqli_query($mysqli,"INSERT INTO RETRABALHO (ID_OP, OP, QUANT_TOTAL, DATA, DATA_RETORNO, ESPECIFICACAO)
values ('$id','$op','$quant','$data','$retorno','$espcf')");

header("Location: /qualidade/inspF/tabela_retrabalho.php");
}
?>