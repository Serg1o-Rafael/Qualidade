<?php 
include("C:/xampp/htdocs/qualidade/config/conexao.php");

if(isset($_POST["update"])){

$id= $_POST["id"];
$op= $_POST["op"];
$snqc = $_POST["snqc"];
$rd = $_POST["rd"];
$cal = $_POST["cal"];
$visual = $_POST["visual"];
$quant = $_POST["quant"];
$sobra = $_POST["sobra"];
$local = $_POST["local"];


$sqlUpdate="UPDATE status SET OP='$op', LOCAL='$local', CALIBRACAO='$cal', VISUAL='$visual', QUANT_TOTAL='$quant', SOBRA='$sobra', RELATORIO_DIM='$rd', SNQC='$snqc' WHERE ID_MATERIAL ='$id'";
$result= mysqli_query($mysqli, $sqlUpdate);


header("Location: /qualidade/monitoramento.php");
}
//header("Location: /qualidade/inicial.php"); ?>