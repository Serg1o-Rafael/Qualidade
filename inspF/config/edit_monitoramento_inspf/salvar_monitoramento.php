<?php 

//Realiza um UPDATE dos novos valores informados no formulário ao banco de dados...

include("C:/xampp/htdocs/qualidade/conexao.php");

if(isset($_POST["update"])){

$id= $_POST["id"];
$op= $_POST["op"];
$quant = $_POST["quant"];
$sobra = $_POST["sobra"];
$local = $_POST["local"];


$sqlUpdate="UPDATE monitoramento SET OP='$op', LOCAL='$local',   QUANT_TOTAL='$quant', SOBRA='$sobra' WHERE ID_MATERIAL ='$id'";
$result= mysqli_query($mysqli, $sqlUpdate);


header("Location: /qualidade/inspF/monitoramento.php");
}
//header("Location: /qualidade/inicial.php"); ?>