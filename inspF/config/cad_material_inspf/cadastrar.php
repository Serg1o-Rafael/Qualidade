<?php 

//Faz um INSERT dos dados obtidos do formulário cad_material no banco de dados...

if(isset($_POST["salvar"])){

    include("C:/xampp/htdocs/qualidade/conexao.php");
    $op = $_POST["op"];
    $cliente = $_POST["cliente"];
    $pedido = $_POST["pedido"];
    $revestimento = $_POST["revestimento"];
    $data_entrada = $_POST["data_entrada"];
    $data_entrega = $_POST["data_entrega"];



    $sql= mysqli_query($mysqli, "INSERT INTO materiais(OP,CLIENTE,PEDIDO,REVESTIMENTO,DATA_ENTRADA,DATA_ENTREGA)
    VALUES('$op','$cliente','$pedido','$revestimento','$data_entrada','$data_entrega')");

    header("location: /qualidade/inspF/cad_monitoramento.php?id=$op");
}


?>