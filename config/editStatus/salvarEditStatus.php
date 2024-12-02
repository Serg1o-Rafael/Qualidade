<?php 
include("C:/xampp/htdocs/qualidade/config/conexao.php");

if(isset($_POST["update"])){

$op = $_POST["op"];
$snqc = $_POST["snqc"];
$rd = $_POST["rd"];
$cal = $_POST["cal"];
$visual = $_POST["visual"];
$quant = $_POST["quant"];
$sobra = $_POST["sobra"];
$local = $_POST["mesa1"].$_POST["mesa2"].$_POST["mesa3"].$_POST["mesa4"].$_POST["mesa5"].$_POST["insp_cliente"];

$sqlUpdate="UPDATE status SET OP='$op', LOCAL='$local', CALIBRACAO='$cal', VISUAL='$visual', QUANT_TOTAL='$quant', SOBRA='$sobra', RELATORIO_DIM='$rd', SNQC='$snqc' WHERE OP = '$op'";
$result= mysqli_query($mysqli, $sqlUpdate);}
header("Location: /qualidade/inicial.php"); ?>