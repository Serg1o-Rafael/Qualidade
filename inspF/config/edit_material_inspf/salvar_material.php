<?php 

//Realiza um UPDATE dos novos valores informados no formulário ao banco de dados...

include("C:/xampp/htdocs/qualidade/conexao.php");

if(isset($_POST["update"])){

$id= $_POST["id"];
$op= $_POST["op"];
$cliente = $_POST["cliente"];
$pedido = $_POST["pedido"];
$revestimento = $_POST["tratamento2"];
$insp_q = $_POST["tratamento1"];
$data_entrada = $_POST["data_entrada"];
$data_entrega = $_POST["data_entrega"];



$sqlUpdate="UPDATE materiais SET OP='$op', CLIENTE='$cliente', PEDIDO='$pedido', REVESTIMENTO='$revestimento', INSP_Q='$insp_q', DATA_ENTRADA='$data_entrada', DATA_ENTREGA='$data_entrega' WHERE ID ='$id'";
$result= mysqli_query($mysqli, $sqlUpdate);


header("Location: /qualidade/inspF/materiais.php");
}
 ?>